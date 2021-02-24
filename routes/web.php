<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Auth::routes([
    'register' => false
]);

Route::get('logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::get('/', [WebController::class, 'index']);
Route::get('atencion-al-vecino', 'WebController@getAttentionNeighbor');
Route::post('atencion-al-vecino', 'WebController@postAttentionNeighbor');
Route::get('galeria', 'WebController@albums');
Route::get('galeria/{slug}', 'WebController@album');
Route::get('prensa', 'WebController@presses');
Route::get('cisnes-informa', 'WebController@informationsList');
Route::get('servicios-municipales', 'WebController@municipalServicesList');
Route::get('servicios-municipales/{slug}', 'WebController@individualMunicipalService');
Route::get('noticias', 'WebController@articlesList');
Route::get('noticias/{slug}', 'WebController@individualArticle');
Route::get('eventos', 'WebController@eventsList');
Route::get('eventos/{slug}', 'WebController@individualEvent');
Route::get('turismo', 'WebController@turismArticlesList');
Route::get('turismo/{slug}', 'WebController@individualTurismArticle');

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
    Route::get('/', 'AdminController@index');

    Route::group(['middleware' => 'permission'], function () {
        Route::resource('users', 'UserController');
        Route::resource('municipalservices', 'MunicipalServiceController');
        Route::resource('articles', 'ArticleController');
        Route::resource('events', 'EventController');
        Route::resource('albums', 'AlbumController');
        Route::resource('informations', 'InformationController');
        Route::resource('presses', 'PressController');
        Route::resource('attentionneighbors', 'AttentionNeighborController');
        Route::resource('videos', 'VideoController');
        Route::resource('turismarticles', 'TurismArticleController');

        Route::get('users/{id}/delete', 'UserController@destroy');
        Route::get('municipalservices/{id}/delete', 'MunicipalServiceController@destroy');
        Route::get('articles/{id}/delete', 'ArticleController@destroy');
        Route::get('events/{id}/delete', 'EventController@destroy');
        Route::get('albums/{id}/delete', 'AlbumController@deleteImage');
        Route::get('informations/{id}/delete', 'InformationController@destroy');
        Route::get('presses/{id}/delete', 'PressController@destroy');
        Route::get('attentionneighbors/{id}/delete', 'AttentionNeighborController@destroy');
        Route::get('videos/{id}/delete', 'VideoController@destroy');
        Route::get('turismarticles/{id}/delete', 'TurismArticleController@destroy');

        Route::post('informations/is-poster', 'InformationController@isPoster');
        Route::post('informations/poster_order', 'InformationController@posterOrder');
        Route::get('albums/{id}/add/images', 'AlbumController@formAddImages');
        Route::post('albums/{id}/add/images', 'AlbumController@addImages');
        Route::post('municipalservices/{id}/add-images', 'MunicipalServiceController@storeImages');
        Route::get('municipalservices/{id}/delete-image', 'MunicipalServiceController@destroyImage');
        Route::post('articles/{id}/add-images', 'ArticleController@storeImages');
        Route::get('articles/{id}/delete-image', 'ArticleController@destroyImage');
        Route::post('articles/{id}/add-audios', 'ArticleController@storeAudios');
        Route::get('articles/{id}/delete-audio', 'ArticleController@destroyAudio');
        Route::post('articles/{id}/add-videos', 'ArticleController@storeVideos');
        Route::get('articles/{id}/delete-video', 'ArticleController@destroyVideo');
        Route::post('turismarticles/{id}/add-images', 'TurismArticleController@storeImages');
        Route::get('turismarticles/{id}/delete-image', 'TurismArticleController@destroyImage');
    });

    Route::group(['prefix' => 'datatables'], function () {
        Route::get('users', 'UserController@getData');
        Route::get('municipalservices', 'MunicipalServiceController@getData');
        Route::get('articles', 'ArticleController@getData');
        Route::get('events', 'EventController@getData');
        Route::get('informations', 'InformationController@getData');
        Route::get('albums', 'AlbumController@getData');
        Route::get('presses', 'PressController@getData');
        Route::get('attentionneighbors', 'AttentionNeighborController@getData');
        Route::get('videos', 'VideoController@getData');
        Route::get('turismarticles', 'TurismArticleController@getData');
    });
});
