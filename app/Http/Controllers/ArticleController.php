<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;
use Yajra\DataTables\DataTables;
use App\Models\Article;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        return view('admin.front.articles.index');
    }

    public function getData()
    {
        $articles = $this->articleRepository->paginateArticles();

        return Datatables::of($articles)
            ->addColumn('on_slider', function ($article) {
                if ($article->on_slider)
                    return 'Si';
                return 'No';
            })->addColumn('body', function ($article) {
                return substr(strip_tags($article->body), 0, 100) . '...';
            })->addColumn('edit', function ($article) {
                return '<a class="btn btn-sm btn-primary" href="/admin/articles/' . $article->id . '/edit"><span class="fa fa-pencil"></span></a>';
            })->addColumn('destroy', function ($article) {
                return '<button data-id="' . $article->id . '" class="btn btn-sm btn-danger boton-eliminar"><span class="fa fa-trash"></span></button>';
            })->rawColumns(['edit', 'destroy'])->make(true);
    }

    public function create()
    {
        return view('admin.front.articles.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'images' => 'required',
            'audios' => 'sometimes|required',
            'videos' => 'sometimes|required',

            'images.*' => 'required|mimes:jpg,jpeg,png',
            'audios.*' => 'required|soundcloud',
            'videos.*' => 'required|youtube',
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required'
        ]);

        $this->articleRepository->storeArticle(
            new Article,
            $request->file('image'),
            $request->title,
            $request->subtitle,
            $request->body,
            $request->on_slider,
            $request->images,
            $request->audios,
            $request->videos
        );

        return redirect()->route('articles.index')->with('message', 'Noticia registrada exitosamente!');
    }

    public function edit($id)
    {
        $article = $this->articleRepository->find($id);
        return view('admin.front.articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' =>  'mimes:jpg,jpeg,png',
            'title' => 'required',
            'body' => 'required'
        ]);

        $article = $this->articleRepository->find($id);

        $this->articleRepository->updateArticle(
            $article,
            $request->file('image'),
            $request->title,
            $request->subtitle,
            $request->body,
            $request->on_slider
        );

        return redirect()->route('articles.index')->with('message', 'Noticia actualizada exitosamente!');
    }

    public function destroy($id)
    {
        $this->articleRepository->destroyArticle($id);
        return redirect()->route('articles.index')->with('message', 'Noticia eliminada exitosamente!');
    }

    public function storeImages(Request $request, $id)
    {
        $this->validate($request, [
            'images' =>  'required',
            'images.*' => 'mimes:jpg,jpeg,png'
        ]);

        $article = $this->articleRepository->find($id);

        $this->articleRepository->uploadMultipleImages($article, $request->images);

        return redirect()->back()->with('message', 'Imágenes agregadas exitosamente!');
    }

    public function storeAudios(Request $request, $id)
    {
        $this->validate($request, [
            'audios' => 'required',
            'audios.*' => 'required|soundcloud'
        ]);

        $article = $this->articleRepository->find($id);

        $this->articleRepository->uploadMultipleAudios($article, $request->audios);

        return redirect()->back()->with('message', 'Audios agregados exitosamente!');
    }

    public function storeVideos(Request $request, $id)
    {
        $this->validate($request, [
            'videos' => 'required',
            'videos.*' => 'required|youtube'
        ]);

        $article = $this->articleRepository->find($id);

        $this->articleRepository->uploadMultipleVideos($article, $request->videos);

        return redirect()->back()->with('message', 'Videos agregados exitosamente!');
    }

    public function destroyImage($id)
    {
        $message = $this->articleRepository->deleteArticleImage($id);

        return redirect()->back()->with('message', $message);
    }

    public function destroyAudio($id)
    {
        $message = $this->articleRepository->deleteArticleAudio($id);

        return redirect()->back()->with('message', $message);
    }

    public function destroyVideo($id)
    {
        $message = $this->articleRepository->deleteArticleVideo($id);

        return redirect()->back()->with('message', $message);
    }
}
