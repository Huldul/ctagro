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
        return redirect()->route('home', ['locale' => 'ru']);
    });
    Route::get('/about', function () {
        return redirect()->route('about', ['locale' => 'ru']);
    });
    Route::get('/policy', function () {
        return redirect()->route('policy', ['locale' => 'ru']);
    });
    Route::get('/partners', function () {
        return redirect()->route('partners', ['locale' => 'ru']);
    });
    Route::get('/offers', function () {
        return redirect()->route('offers', ['locale' => 'ru']);
    });
    Route::get('/news', function () {
        return redirect()->route('news', ['locale' => 'ru']);
    });
    Route::get('/media', function () {
        return redirect()->route('media', ['locale' => 'ru']);
    });
    Route::get('/reviews', function () {
        return redirect()->route('reviews', ['locale' => 'ru']);
    });
    Route::get('/catalog', function () {
        return redirect()->route('catalog', ['locale' => 'ru']);
    });
    Route::get('/catalog-library', function () {
        return redirect()->route('catalog-library', ['locale' => 'ru']);
    });
    Route::get('/catalog-online/{slug}', function ($slug) {
        return redirect()->route('catalog-online', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/catalog-brand', function () {
        return redirect()->route('catalog-brand', ['locale' => 'ru']);
    });
    Route::get('/service', function () {
        return redirect()->route('service', ['locale' => 'ru']);
    });
    Route::get('/spares', function () {
        return redirect()->route('spares', ['locale' => 'ru']);
    });
    Route::get('/contacts', function () {
        return redirect()->route('contacts', ['locale' => 'ru']);
    });

    Route::get('/partners-inner/{slug}', function ($slug) {
        return redirect()->route('partners-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/offers-inner/{slug}', function ($slug) {
        return redirect()->route('offers-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/news-inner/{slug}', function ($slug) {
        return redirect()->route('news-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/reviews-inner/{slug}', function ($slug) {
        return redirect()->route('reviews-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/media-inner/{slug}', function ($slug) {
        return redirect()->route('media-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/catalog-inner/{slug}', function ($slug) {
        return redirect()->route('catalog-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/product/{slug}', function ($slug) {
        return redirect()->route('product.show', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/catalog-brand-inner/{slug}', function ($slug) {
        return redirect()->route('catalog-brand-inner', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/product-subtypes/{slug}', function ($slug) {
        return redirect()->route('product.subtypes', ['locale' => 'ru', 'slug' => $slug]);
    });
    Route::get('/catalog-brand-page/{slug}', function ($slug) {
        return redirect()->route('catalog-brand-page', ['locale' => 'ru', 'slug' => $slug]);
    });
    // Другие роуты, которые должны работать без указания локали
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
