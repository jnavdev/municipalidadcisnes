<?php

namespace App\Http\Controllers;

use App\Album;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Repositories\AlbumRepository;
use Intervention\Image\Facades\Image as InterventionImage;
use Yajra\Datatables\Facades\Datatables;

class AlbumController extends Controller
{
    private $albumRepository;

    public function __construct(AlbumRepository $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }

    public function index()
    {
        return view('admin.front.albums.index');
    }

    public function getData()
    {
        $albums = $this->albumRepository->paginateAlbums();

        return Datatables::of($albums)
            ->addColumn('image', function ($album) {
                return $album->getImage();
            })->addColumn('count', function ($album) {
                return $album->images->count();
            })->addColumn('edit', function ($album) {
                return '<a class="btn btn-sm btn-primary" href="/admin/albums/' . $album->id . '/add/images"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($album) {
                return '<button data-id="' . $album->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->make(true);
    }

    public function create()
    {
        return view('admin.front.albums.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'images' => 'required',
            'images.*' => 'required|mimes:jpg,jpeg,png'
        ]);

        $this->albumRepository->storeAlbum(
            $request->input('name'),
            $request->file('images')
        );

        return redirect()->route('albums.index')->with('message', 'Álbum registrado exitosamente!');
    }

    public function formAddImages($id)
    {
        $album = Album::findOrFail($id);
        return view('admin.front.albums.addimages', compact('album'));
    }

    public function addImages(Request $request, $id)
    {
        $this->validate($request, [
            'images' => 'required',
            'images.*' => 'required|mimes:jpg,jpeg,png'
        ]);

        $album = Album::findOrFail($id);

        foreach ($request->file('images') as $image) {
            $fileName = time() . '-' . $image->getClientOriginalName();
            $path = public_path() . '/uploads/images/' . $fileName;
            InterventionImage::make($image)->fit(770, 525)->save($path, 90);

            Image::create([
                'name' => $fileName,
                'album_id' => $album->id
            ]);
        }

        return redirect()->back()->with('message', 'Imágenes agregadas exitosamente!');
    }

    public function deleteImage($id)
    {
        $image = Image::findOrFail($id);
        $album = Album::findOrFail($image->album_id);
        $mensaje = '';

        if ($album->images->count() > 1) {
            File::delete(public_path() . '/uploads/images/' . $image->name);
            $image->delete();
            $mensaje = 'Imágen eliminada exitosamente!';
        } else {
            $mensaje = 'El álbum debe tener al menos una imágen!';
        }

        return redirect()->back()->with('message', $mensaje);
    }

    public function destroy($id)
    {
        $this->albumRepository->destroyAlbum($id);
        return redirect()->route('albums.index')->with('message', 'Álbum eliminado exitosamente!');
    }
}
