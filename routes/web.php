<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductSearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/search', [ProductSearchController::class, 'search'])->name('product.search');
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'locale'], function() {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/policy', [PageController::class, 'policy'])->name('policy');
    Route::get('/partners', [PageController::class, 'partners'])->name('partners');
    Route::get('/offers', [PageController::class, 'offers'])->name('offers');
    Route::get('/news', [PageController::class, 'news'])->name('news');
    Route::get('/media', [PageController::class, 'media'])->name('media');
    Route::get('/reviews', [PageController::class, 'reviews'])->name('reviews');
    Route::get('/catalog', [PageController::class, 'catalog'])->name('catalog');
    Route::get('/catalog-library', [PageController::class, 'catalog_library'])->name('catalog-library');
    Route::get('/catalog-online/{slug}', [PageController::class, 'catalog_online'])->name('catalog-online');
    Route::get('/catalog-brand', [PageController::class, 'catalog_brand'])->name('catalog-brand');

    Route::get('/service', [PageController::class, 'service'])->name('service');
    Route::get('/spares', [PageController::class, 'spares'])->name('spares');
    Route::get('/contacts', [PageController::class, 'contacts'])->name('contacts');

    Route::get('/library-online', [PageController::class, 'library_online'])->name('library_online');

    Route::get('/partners-inner/{slug}', [PageController::class, 'partners_inner'])->name('partners-inner');
    Route::get('/offers-inner/{slug}', [PageController::class, 'offers_inner'])->name('offers-inner');
    Route::get('/news-inner/{slug}', [PageController::class, 'news_inner'])->name('news-inner');
    Route::get('/reviews-inner/{slug}', [PageController::class, 'reviews_inner'])->name('reviews-inner');
    Route::get('/media-inner/{slug}', [PageController::class, 'media_inner'])->name('media-inner');
    Route::get('/catalog-inner/{slug}', [PageController::class, 'catalog_inner'])->name('catalog-inner');
    Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/catalog-brand-inner/{slug}', [PageController::class, 'catalog_brand_inner'])->name('catalog-brand-inner');

    Route::get('/product-subtypes/{slug}', [ProductController::class, 'subtypes'])->name('product.subtypes');

    Route::get('/catalog-brand-page/{slug}', [PageController::class, 'catalog_brand_page'])->name('catalog-brand-page');
});

Route::post('/sendOrder', [ApplicationController::class, 'send_order'])->name('sendOrder');

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return app()->call('App\Http\Controllers\PageController@index', ['locale' => 'ru']);
    })->name('home.without_locale');
    Route::get('/about', function () {
        return app()->call('App\Http\Controllers\PageController@about', ['locale' => 'ru']);
    })->name('about.without_locale');
    Route::get('/policy', function () {
        return app()->call('App\Http\Controllers\PageController@policy', ['locale' => 'ru']);
    })->name('policy.without_locale');
    Route::get('/partners', function () {
        return app()->call('App\Http\Controllers\PageController@partners', ['locale' => 'ru']);
    })->name('partners.without_locale');
    Route::get('/offers', function () {
        return app()->call('App\Http\Controllers\PageController@offers', ['locale' => 'ru']);
    })->name('offers.without_locale');
    Route::get('/news', function () {
        return app()->call('App\Http\Controllers\PageController@news', ['locale' => 'ru']);
    })->name('news.without_locale');
    Route::get('/media', function () {
        return app()->call('App\Http\Controllers\PageController@media', ['locale' => 'ru']);
    })->name('media.without_locale');
    Route::get('/reviews', function () {
        return app()->call('App\Http\Controllers\PageController@reviews', ['locale' => 'ru']);
    })->name('reviews.without_locale');
    Route::get('/catalog', function () {
        return app()->call('App\Http\Controllers\PageController@catalog', ['locale' => 'ru']);
    })->name('catalog.without_locale');
    Route::get('/catalog-library', function () {
        return app()->call('App\Http\Controllers\PageController@catalog_library', ['locale' => 'ru']);
    })->name('catalog-library.without_locale');
    Route::get('/catalog-online/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@catalog_online', ['locale' => 'ru', 'slug' => $slug]);
    })->name('catalog-online.without_locale');
    Route::get('/catalog-brand', function () {
        return app()->call('App\Http\Controllers\PageController@catalog_brand', ['locale' => 'ru']);
    })->name('catalog-brand.without_locale');
    Route::get('/service', function () {
        return app()->call('App\Http\Controllers\PageController@service', ['locale' => 'ru']);
    })->name('service.without_locale');
    Route::get('/spares', function () {
        return app()->call('App\Http\Controllers\PageController@spares', ['locale' => 'ru']);
    })->name('spares.without_locale');
    Route::get('/contacts', function () {
        return app()->call('App\Http\Controllers\PageController@contacts', ['locale' => 'ru']);
    })->name('contacts.without_locale');

    Route::get('/partners-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@partners_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('partners-inner.without_locale');
    Route::get('/offers-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@offers_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('offers-inner.without_locale');
    Route::get('/news-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@news_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('news-inner.without_locale');
    Route::get('/reviews-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@reviews_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('reviews-inner.without_locale');
    Route::get('/media-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@media_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('media-inner.without_locale');
    Route::get('/catalog-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@catalog_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('catalog-inner.without_locale');
    Route::get('/product/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\ProductController@show', ['locale' => 'ru', 'slug' => $slug]);
    })->name('product.show.without_locale');
    Route::get('/catalog-brand-inner/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@catalog_brand_inner', ['locale' => 'ru', 'slug' => $slug]);
    })->name('catalog-brand-inner.without_locale');
    Route::get('/product-subtypes/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\ProductController@subtypes', ['locale' => 'ru', 'slug' => $slug]);
    })->name('product.subtypes.without_locale');
    Route::get('/catalog-brand-page/{slug}', function ($slug) {
        return app()->call('App\Http\Controllers\PageController@catalog_brand_page', ['locale' => 'ru', 'slug' => $slug]);
    })->name('catalog-brand-page.without_locale');
    // Другие роуты, которые должны работать без указания локали
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
