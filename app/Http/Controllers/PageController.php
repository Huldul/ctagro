<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Med;
use App\Models\News;
use App\Models\Offer;
use App\Models\Partner;
use App\Models\Type;
use App\Models\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $untrMeds = Med::paginate(5);
        $meds = $this->translateCollection($untrMeds ,app()->getLocale());

        $videos = Video::All();
        return view('index', [
            'meds'=>$meds,
            'videos'=>$videos,
        ]);
    }
    public function about(){
        return view('about');
    }
    public function partners(){
        $untrPart = Partner::paginate(12);
        $partners = $this->translateCollection($untrPart ,app()->getLocale());
        return view('partners', [
            'partners'=>$partners,
        ]);
    }
    public function partners_inner($locale,$slug){
        $untrPartner = Partner::Where('slug', $slug)->first();

        $partner = $untrPartner->translate(app()->getLocale());

        return view('partners-inner', [
            'partner'=>$partner
        ]);
    }
    public function offers(){
        $untrOff = Offer::paginate(4);
        $offers = $this->translateCollection($untrOff ,app()->getLocale());
        return view('offers', [
            'offers'=>$offers,
        ]);
    }
    public function offers_inner($locale,$slug){
        $untrOff = Offer::Where('slug', $slug)->first();

        $offer = $untrOff->translate(app()->getLocale());

        return view('offers-inner', [
            'offer'=>$offer
        ]);
    }

    public function news(){
        $untrNews = News::paginate(12);
        $news = $this->translateCollection($untrNews ,app()->getLocale());
        return view('news',[
            'news'=>$news,
        ]);
    }
    public function news_inner($locale,$slug){
        $untrNews = News::Where('slug', $slug)->first();

        $news = $untrNews->translate(app()->getLocale());

        return view('news-inner', [
            'news'=>$news
        ]);
    }
    public function media(){
        $untrMeds = Med::paginate(12);
        $meds = $this->translateCollection($untrMeds ,app()->getLocale());
        return view('media',[
            'meds'=>$meds,
        ]);
    }
    public function media_inner($locale,$slug){
        $untrNews = Med::Where('slug', $slug)->first();

        $news = $untrNews->translate(app()->getLocale());

        return view('media-inner', [
            'med'=>$news
        ]);
    }
    // public function reviews(){
    //     $untrMeds = Rev::paginate(12);
    //     $meds = $this->translateCollection($untrMeds ,app()->getLocale());
    //     return view('reviews',[
    //         'meds'=>$meds,
    //     ]);
    // }
    public function catalog_inner($locale, $slug) {
        $type = Type::where("slug", $slug)->first();
        if (!$type) {
            abort(404, 'Type not found');
        }
        $transtype = $type->translate(app()->getLocale());
        $untrProds = $type->products; // Получаем коллекцию продуктов
        $prods = $this->translateCollection($untrProds, app()->getLocale());

        return view('catalog-inner', [
            'products' => $prods,
            'type' => $transtype,
        ]);
    }


    public function catalog_library(){
        $untrTypes = Type::paginate(12);
        $inner_types = $this->translateCollection($untrTypes ,app()->getLocale());
        return view('catalog-library', [
            'inner_types'=>$inner_types
        ]);
    }
    public function catalog_brand(){
        $untrBrand= Brand::paginate(12);
        $inner_brands = $this->translateCollection($untrBrand ,app()->getLocale());
        return view('catalog-brand', [
            'inner_brands'=>$inner_brands
        ]);
    }
    public function catalog_brand_inner($locale, $slug) {
        $type = Brand::where("slug", $slug)->first();
        if (!$type) {
            abort(404, 'Type not found');
        }
        $transtype = $type->translate(app()->getLocale());
        $untrProds = $type->products; // Получаем коллекцию продуктов
        $prods = $this->translateCollection($untrProds, app()->getLocale());

        return view('catalog-library-inner', [
            'products' => $prods,
            'brand' => $transtype,
        ]);
    }


    public function service(){
        return view('service');
    }
    public function spares(){
        return view('spares');
    }
    public function contacts(){
        return view('contacts');
    }

    // about
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

    private function translateCollection($paginator, $lang) {
        if ($paginator instanceof \Illuminate\Pagination\LengthAwarePaginator || $paginator instanceof \Illuminate\Pagination\Paginator) {
            // Получаем коллекцию элементов из пагинатора, транслируем её,
            // и затем создаём новый объект пагинации с транслированной коллекцией.
            $translatedItems = $paginator->getCollection()->map(function ($item) use ($lang) {
                // Предполагается, что у вас есть метод translate() в модели.
                return $item->translate($lang);
            });

            // Заменяем коллекцию в пагинаторе на транслированную.
            return new \Illuminate\Pagination\LengthAwarePaginator(
                $translatedItems,
                $paginator->total(),
                $paginator->perPage(),
                $paginator->currentPage(),
                [
                    'path' => \Illuminate\Pagination\Paginator::resolveCurrentPath(),
                    'pageName' => 'page',
                ]
            );
        }

        // Если передана не пагинация, а обычная коллекция, то просто возвращаем её транслированный вариант.
        return $paginator->map(function ($item) use ($lang) {
            return $item->translate($lang);
        });
    }
}
