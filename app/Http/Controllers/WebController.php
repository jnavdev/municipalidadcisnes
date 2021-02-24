<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Image;
use App\Models\Album;
use App\Models\Press;
use App\Models\Video;
use App\Models\Article;
use Carbon\Carbon;
use App\Models\Information;
use App\Models\ArticleVideo;
use App\Models\TurismArticle;
use App\Models\MunicipalService;
use App\Models\AttentionNeighbor;
use Illuminate\Http\Request;
use App\Mail\Oirs as OirsMail;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    public function index()
    {
        $allArticles = Article::where('on_slider', true)->orderby('created_at','DESC')->take(7)->get();
        $banners = $allArticles->take(3);
        $miniArticles = $allArticles->diff($banners)->all();
        $municipalServices = MunicipalService::all();
        $articles = Article::orderby('created_at','DESC')->limit(4)->offset(3)->get();
        $videos = Video::orderBy('created_at', 'DESC')->where('active', 'Si')->limit(4)->get();
        $informations = Information::where('is_poster', false)->orderby('created_at','DESC')->limit(6)->get();

        $posters = Information::where('is_poster', true)->orderBy('poster_order', 'ASC')->take(4)->get();

        if (! $posters) {
            $posters = Information::orderBy('created_at', 'DESC')->take(4)->get();
        }

        return view('web.front.home', compact('banners', 'miniArticles', 'municipalServices', 'articles', 'videos', 'informations', 'posters'));
    }

    public function individualMunicipalService($slug)
    {
        $miniArticles = Article::take(6)->get();
        $municipalService = MunicipalService::where('slug', $slug)->first();
        return view('web.front.individualmunicipalservice', compact('municipalService', 'miniArticles'));
    }

    public function individualArticle($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $otherArticles = Article::orderBy('created_at', 'DESC')->where('slug', '<>', $slug)->take(6)->get();
        return view('web.front.individualarticle', compact('article', 'otherArticles'));
    }

    public function individualTurismArticle($slug)
    {
        $turismArticle = TurismArticle::where('slug', $slug)->first();
        $otherTurismArticles = TurismArticle::orderBy('created_at', 'DESC')->where('slug', '<>', $slug)->take(6)->get();
        return view('web.front.individualturismarticle', compact('turismArticle', 'otherTurismArticles'));
    }

    public function individualEvent($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $otherEvents = Event::take(6)->orderBy('id', 'ASC')->get();
        return view('web.front.individualevent', compact('event', 'otherEvents'));
    }

    public function municipalServicesList()
    {
        $miniArticles = Article::take(6)->get();
        $municipalServices = MunicipalService::paginate(4);
        return view('web.front.municipalserviceslist', compact('municipalServices', 'miniArticles'));
    }

    public function articlesList()
    {
        $miniArticles = Article::take(6)->get();
        $articles = Article::orderBy('created_at', 'DESC')->paginate(6);
        return view('web.front.articleslist', compact('articles', 'miniArticles'));
    }

    public function turismArticlesList()
    {
        $miniTurismArticles = TurismArticle::take(6)->get();
        $turismArticles = TurismArticle::orderBy('created_at', 'DESC')->paginate(6);
        return view('web.front.turismarticleslist', compact('turismArticles', 'miniTurismArticles'));
    }

    public function eventsList()
    {
        $miniArticles = Article::take(6)->get();
        $events = Event::orderBy('date', 'ASC')->where('date', '>=', Carbon::now()->toDateString())->paginate(6);
        return view('web.front.eventslist', compact('events', 'miniArticles'));
    }

    public function informationsList()
    {
        $miniArticles = Article::take(6)->get();
        $informations = Information::where('is_poster', false)->orderby('created_at','DESC')->paginate(12);
        return view('web.front.informationslist', compact('informations', 'miniArticles'));
    }

    public function albums()
    {
        $albums = Album::orderBy('id', 'DESC')->paginate(6);
        return view('web.front.gallery', compact('albums'));
    }

    public function presses()
    {
        $miniArticles = Article::take(6)->get();
        $presses = Press::orderBy('id', 'DESC')->paginate(6);
        return view('web.front.presses', compact('presses', 'miniArticles'));
    }

    public function getAttentionNeighbor()
    {
        return view('web.front.atencionalvecino');
    }

    public function postAttentionNeighbor(Request $request)
    {
        $this->validate($request, [
            'reason' => 'required',
            'rut' => 'required|rut',
            'names' => 'required',
            'surnames' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $attentionNeighbor = new AttentionNeighbor();
        $attentionNeighbor->reason = $request->input('reason');
        $attentionNeighbor->rut = $request->input('rut');
        $attentionNeighbor->names = $request->input('names');
        $attentionNeighbor->surnames = $request->input('surnames');
        $attentionNeighbor->address = $request->input('address');
        $attentionNeighbor->email = $request->input('email');
        $attentionNeighbor->phone = $request->input('phone');
        $attentionNeighbor->message = $request->input('message');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '-' . $file->getClientOriginalName();
            $path = public_path() . '/uploads/attention_neighbors/';
            $file->move($path, $fileName);
            $attentionNeighbor->file = $fileName;
        }

        $attentionNeighbor->save();

        // Mail::to('contacto@municipalidadcisnes.cl', 'Municipalidad de Cisnes')->send(new OirsMail($attentionNeighbor));

        return redirect()->back()->with('message', 'Formulario enviado exitosamente!');
    }

    public function album($slug)
    {
        $album = Album::where('slug', $slug)->first();
        return view('web.front.album', compact('album'));
    }
}
