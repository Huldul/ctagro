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
    Route::get('/',[PageController::class, "index"])->name('home');
    Route::get('/about',[PageController::class, "about"])->name('about');
    Route::get('/policy',[PageController::class, "policy"])->name('policy');
    Route::get('/partners',[PageController::class, "partners"])->name('partners');
    Route::get('/offers',[PageController::class, "offers"])->name('offers');
    Route::get('/news',[PageController::class, "news"])->name('news');
    Route::get('/media',[PageController::class, "media"])->name('media');
    Route::get('/reviews',[PageController::class, "reviews"])->name('reviews');
    Route::get('/catalog',[PageController::class, "catalog"])->name('catalog');
    Route::get('/catalog',[PageController::class, "catalog_library"])->name('catalog-library');
    Route::get('/catalog-online/{slug}',[PageController::class, "catalog_online"])->name('catalog-online')->where('locale', '[a-zA-Z]{2}');
    Route::get('/catalog-brand',[PageController::class, "catalog_brand"])->name('catalog-brand');

    Route::get('/service',[PageController::class, "service"])->name('service');
    Route::get('/spares',[PageController::class, "spares"])->name('spares');
    Route::get('/contacts',[PageController::class, "contacts"])->name('contacts');

    Route::get('/catalog-library',[PageController::class, "library_online"])->name('library_online');

    Route::get('/partners-inner/{slug}',[PageController::class, "partners_inner"])->name('partners-inner')->where('locale', '[a-zA-Z]{2}');
    Route::get('/offers-inner/{slug}',[PageController::class, "offers_inner"])->name('offers-inner')->where('locale', '[a-zA-Z]{2}');
    Route::get('/news-inner/{slug}',[PageController::class, "news_inner"])->name('news-inner')->where('locale', '[a-zA-Z]{2}');
    Route::get('/reviews-inner/{slug}',[PageController::class, "reviews_inner"])->name('reviews-inner')->where('locale', '[a-zA-Z]{2}');
    Route::get('/media-inner/{slug}',[PageController::class, "media_inner"])->name('media-inner')->where('locale', '[a-zA-Z]{2}');
    Route::get('/catalog-inner/{slug}',[PageController::class, "catalog_inner"])->name('catalog-inner')->where('locale', '[a-zA-Z]{2}');
    Route::get('/product/{slug}',[ProductController::class, "show"])->name('product.show')->where('locale', '[a-zA-Z]{2}');
    Route::get('/catalog-brand-inner/{slug}',[PageController::class, "catalog_brand_inner"])->name('catalog-brand-inner')->where('locale', '[a-zA-Z]{2}');

    Route::get('/product-subtypes/{slug}',[ProductController::class, "subtypes"])->name('product.subtypes')->where('locale', '[a-zA-Z]{2}');

    Route::get('/catalog-brand-page/{slug}',[PageController::class, "catalog_brand_page"])->name('catalog-brand-page')->where('locale', '[a-zA-Z]{2}');

    // partners
    // offers
    // news
    // media
    // reviews
    // // catalog-inner
    // catalog-library
    // service
    // spares
    // contacts
});
Route::post('/sendOrder', [ApplicationController::class, 'send_order'])->name('sendOrder');
Route::middleware(['locale'])->group(function() {
    Route::get('/', [PageController::class, 'index'])->name('home.without_locale');
    Route::get('/about',[PageController::class, "about"])->name('about.without_locale');
    Route::get('/policy',[PageController::class, "policy"])->name('policy.without_locale');
    Route::get('/partners',[PageController::class, "partners"])->name('partners.without_locale');
    Route::get('/offers',[PageController::class, "offers"])->name('offers.without_locale');
    Route::get('/news',[PageController::class, "news"])->name('news.without_locale');
    Route::get('/media',[PageController::class, "media"])->name('media.without_locale');
    Route::get('/reviews',[PageController::class, "reviews"])->name('reviews.without_locale');
    Route::get('/catalog',[PageController::class, "catalog"])->name('catalog.without_locale');
    Route::get('/catalog',[PageController::class, "catalog_library"])->name('catalog-library.without_locale');
    Route::get('/catalog-online/{slug}',[PageController::class, "catalog_online"])->name('catalog-online.without_locale');
    Route::get('/catalog-brand',[PageController::class, "catalog_brand"])->name('catalog-brand.without_locale');
    Route::get('/service',[PageController::class, "service"])->name('service.without_locale');
    Route::get('/spares',[PageController::class, "spares"])->name('spares.without_locale');
    Route::get('/contacts',[PageController::class, "contacts"])->name('contacts.without_locale');

    Route::get('/partners-inner/{slug}', [PageController::class, 'partners_inner'])->name('partners-inner.without_locale');
    Route::get('/offers-inner/{slug}', [PageController::class, 'offers_inner'])->name('offers-inner.without_locale');
    Route::get('/news-inner/{slug}', [PageController::class, 'news_inner'])->name('news-inner.without_locale');
    Route::get('/reviews-inner/{slug}',[PageController::class, "reviews_inner"])->name('reviews-inner.without_locale');
    Route::get('/media-inner/{slug}', [PageController::class, 'media_inner'])->name('media-inner.without_locale');
    Route::get('/catalog-inner/{slug}', [PageController::class, 'catalog_inner'])->name('catalog-inner.without_locale');
    Route::get('/product/{slug}', [PageController::class, 'show'])->name('product.show.without_locale');
    Route::get('/catalog-brand-inner/{slug}', [PageController::class, 'catalog_brand_inner'])->name('catalog-brand-inner.without_locale');
    Route::get('/product-subtypes/{slug}',[ProductController::class, "subtypes"])->name('product.subtypes.without_locale');
    Route::get('/catalog-brand-page/{slug}', [PageController::class, 'catalog_brand_page'])->name('catalog-brand-page.without_locale');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
