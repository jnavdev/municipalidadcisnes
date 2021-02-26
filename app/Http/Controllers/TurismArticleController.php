<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TurismArticleRepository;
use Yajra\DataTables\DataTables;
use App\Models\TurismArticle;
use App\Models\TurismArticleImage;

class TurismArticleController extends Controller
{
    private $turismArticleRepository;

    public function __construct(TurismArticleRepository $turismArticleRepository)
    {
        $this->turismArticleRepository = $turismArticleRepository;
    }

    public function index()
    {
        return view('admin.front.turismarticles.index');
    }

    public function getData()
    {
        $turismArticles = $this->turismArticleRepository->paginateTurismArticles();

        return Datatables::of($turismArticles)
            ->addColumn('body', function ($article) {
                return substr(strip_tags($article->body), 0, 100) . '...';
            })->addColumn('edit', function ($article) {
                return '<a class="btn btn-sm btn-primary" href="/admin/turismarticles/' . $article->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($article) {
                return '<button data-id="' . $article->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->rawColumns(['edit', 'destroy'])->make(true);
    }

    public function create()
    {
        return view('admin.front.turismarticles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpg,jpeg,png',
            'images' => 'required',
            'images.*' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required',
            'body' => 'required'
        ]);

        $this->turismArticleRepository->storeTurismArticle(
            new TurismArticle,
            $request->file('image'),
            $request->title,
            $request->body,
            $request->images
        );

        return redirect()->route('turismarticles.index')->with('message', 'Registro guardado exitosamente!');
    }

    public function edit($id)
    {
        $turismArticle = $this->turismArticleRepository->find($id);
        return view('admin.front.turismarticles.edit', compact('turismArticle'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' =>  'mimes:jpg,jpeg,png',
            'title' => 'required',
            'body' => 'required'
        ]);

        $turismArticle = $this->turismArticleRepository->find($id);

        $this->turismArticleRepository->updateTurismArticle(
            $turismArticle,
            $request->file('image'),
            $request->title,
            $request->body
        );

        return redirect()->route('turismarticles.index')->with('message', 'Registro actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $this->turismArticleRepository->destroyTurismArticle($id);
        return redirect()->route('turismarticles.index')->with('message', 'Registro eliminado exitosamente!');
    }

    public function storeImages(Request $request, $id)
    {
        $this->validate($request, [
            'images' =>  'required',
            'images.*' => 'mimes:jpg,jpeg,png'
        ]);

        $turismArticle = $this->turismArticleRepository->find($id);

        $this->turismArticleRepository->uploadMultipleImages($turismArticle, $request->images);

        return redirect()->back()->with('message', 'Imágenes agregadas exitosamente!');
    }

    public function destroyImage($id)
    {
        $message = $this->turismArticleRepository->deleteTurismArticleImage($id);

        return redirect()->back()->with('message', $message);
    }
}
