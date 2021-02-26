<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\VideoRepository;
use App\Models\Video;
use Yajra\DataTables\DataTables;

class VideoController extends Controller
{
    private $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function index()
    {
        return view('admin.front.videos.index');
    }

    public function getData()
    {
        $videos = $this->videoRepository->paginateVideos();

        return Datatables::of($videos)
            ->addColumn('edit', function ($video) {
                return '<a class="btn btn-sm btn-primary" href="/admin/videos/' . $video->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($video) {
                return '<button data-id="'.$video->id.'" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->rawColumns(['edit', 'destroy'])->make(true);
    }

    public function create()
    {
        return view('admin.front.videos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|youtube',
            'title' => 'required',
            'active' => 'required'
        ]);

        $this->videoRepository->storeVideo(
            new Video,
            $request->url,
            $request->title,
            $request->active
        );

        return redirect()->route('videos.index')->with('message', 'Video registrado exitosamente!');
    }

    public function edit($id)
    {
        $video = $this->videoRepository->find($id);
        return view('admin.front.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'url' => 'required|youtube',
            'title' => 'required',
            'active' => 'required'
        ]);

        $video = $this->videoRepository->find($id);

        $this->videoRepository->updateVideo(
            $video,
            $request->url,
            $request->title,
            $request->active
        );

        return redirect()->route('videos.index')->with('message', 'Video actualizado exitosamente!');
    }

    public function destroy($id)
    {
        $this->videoRepository->destroyVideo($id);
        return redirect()->route('videos.index')->with('message', 'Video eliminado exitosamente!');
    }
}
