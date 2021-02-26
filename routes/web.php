<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MunicipalServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\AttentionNeighborController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TurismArticleController;

Auth::routes([
    'register' => false
]);

Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/', [WebController::class, 'index']);
Route::get('atencion-al-vecino', [WebController::class, 'getAttentionNeighbor']);
Route::post('atencion-al-vecino', [WebController::class, 'postAttentionNeighbor']);
Route::get('galeria', [WebController::class, 'albums']);
Route::get('galeria/{slug}', [WebController::class, 'album']);
Route::get('prensa', [WebController::class, 'presses']);
Route::get('cisnes-informa', [WebController::class, 'informationsList']);
Route::get('servicios-municipales', [WebController::class, 'municipalServicesList']);
Route::get('servicios-municipales/{slug}', [WebController::class, 'individualMunicipalService']);
Route::get('noticias', [WebController::class, 'articlesList']);
Route::get('noticias/{slug}', [WebController::class, 'individualArticle']);
Route::get('eventos', [WebController::class, 'eventsList']);
Route::get('eventos/{slug}', [WebController::class, 'individualEvent']);
Route::get('turismo', [WebController::class, 'turismArticlesList']);
Route::get('turismo/{slug}', [WebController::class, 'individualTurismArticle']);

Route::get('municipalidad/alcaldia', function () {
    return view('web.front.alcaldia');
});

Route::get('municipalidad/concejal', function () {
    return view('web.front.concejal');
});

Route::get('municipalidad/planregulador', function () {
    return view('web.front.planregulador');
});

Route::get('municipalidad/comuna', function () {
    return view('web.front.comuna');
});

Route::get('municipalidad/pladeco', function () {
    return view('web.front.pladeco');
});

Route::get('municipalidad/tramites', function () {
    return view('web.front.tramites');
});

Route::get('municipalidad/medioambiente', function () {
    return view('web.front.medioambiente');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::group(['middleware' => 'permission'], function () {
        Route::resources([
            'users' => UserController::class,
            'municipalservices' => MunicipalServiceController::class,
            'articles' => ArticleController::class,
            'events' => EventController::class,
            'albums' => AlbumController::class,
            'informations' => InformationController::class,
            'presses' => PressController::class,
            'attentionneighbors' => AttentionNeighborController::class,
            'videos' => VideoController::class,
            'turismarticles' => TurismArticleController::class,
        ]);

        Route::get('users/{id}/delete', [UserController::class, 'destroy']);
        Route::get('municipalservices/{id}/delete', [MunicipalServiceController::class, 'destroy']);
        Route::get('articles/{id}/delete', [ArticleController::class, 'destroy']);
        Route::get('events/{id}/delete', [EventController::class, 'destroy']);
        Route::get('albums/{id}/delete', [AlbumController::class, 'deleteImage']);
        Route::get('informations/{id}/delete', [InformationController::class, 'destroy']);
        Route::get('presses/{id}/delete', [PressController::class, 'destroy']);
        Route::get('attentionneighbors/{id}/delete', [AttentionNeighborController::class, 'destroy']);
        Route::get('videos/{id}/delete', [VideoController::class, 'destroy']);
        Route::get('turismarticles/{id}/delete', [TurismArticleController::class, 'destroy']);

        Route::post('informations/is-poster', [InformationController::class, 'isPoster']);
        Route::post('informations/poster_order', [InformationController::class, 'posterOrder']);
        Route::get('albums/{id}/add/images', [AlbumController::class, 'formAddImages']);
        Route::post('albums/{id}/add/images', [AlbumController::class, 'addImages']);
        Route::post('municipalservices/{id}/add-images', [MunicipalServiceController::class, 'storeImages']);
        Route::get('municipalservices/{id}/delete-image', [MunicipalServiceController::class, 'destroyImage']);
        Route::post('articles/{id}/add-images', [ArticleController::class, 'storeImages']);
        Route::get('articles/{id}/delete-image', [ArticleController::class, 'destroyImage']);
        Route::post('articles/{id}/add-audios', [ArticleController::class, 'storeAudios']);
        Route::get('articles/{id}/delete-audio', [ArticleController::class, 'destroyAudio']);
        Route::post('articles/{id}/add-videos', [ArticleController::class, 'storeVideos']);
        Route::get('articles/{id}/delete-video', [ArticleController::class, 'destroyVideo']);
        Route::post('turismarticles/{id}/add-images', [TurismArticleController::class, 'storeImages']);
        Route::get('turismarticles/{id}/delete-image', [TurismArticleController::class, 'destroyImage']);
    });

    Route::group(['prefix' => 'datatables'], function () {
        Route::get('users', [UserController::class, 'getData']);
        Route::get('municipalservices', [MunicipalServiceController::class, 'getData']);
        Route::get('articles', [ArticleController::class, 'getData']);
        Route::get('events', [EventController::class, 'getData']);
        Route::get('informations', [InformationController::class, 'getData']);
        Route::get('albums', [AlbumController::class, 'getData']);
        Route::get('presses', [PressController::class, 'getData']);
        Route::get('attentionneighbors', [AttentionNeighborController::class, 'getData']);
        Route::get('videos', [VideoController::class, 'getData']);
        Route::get('turismarticles', [TurismArticleController::class, 'getData']);
    });
});
