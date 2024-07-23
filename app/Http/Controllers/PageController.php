<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\AdvNews;
use App\Models\Brand;
use App\Models\CustomPage;
use App\Models\LibraryPdf;
use App\Models\Med;
use App\Models\News;
use App\Models\Offer;
use App\Models\OtherExtraBlock;
use App\Models\Partner;
use App\Models\Review;
use App\Models\Type;
use App\Models\Video;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $untrMeds = News::paginate(5);
        $meds = $this->translateCollection($untrMeds ,app()->getLocale());
        $untrpage = CustomPage::findOrFail(1);
        $page = $untrpage->translate(app()->getLocale());
        $videos = Video::Where("type", "gs")->get();

        $seo = (object)[
            'title' => "ГЛАВНАЯ СТРАНИЦА",
            'subtitle' => "ГЛАВНАЯ СТРАНИЦА",
            'keywords' => "ГЛАВНАЯ СТРАНИЦА",
        ];
        return view('index', [
            'meds'=>$meds,
            'videos'=>$videos,
            'page'=>$page,
            'seo' => $seo,
        ]);
    }
    public function about(){
        $untrpage = AboutPage::firstOrFail();
        $page = $untrpage->translate(app()->getLocale());
        $seo = (object)[
            'title' => "Миссия компании",
            'subtitle' => "Миссия компании",
            'keywords' => "Миссия компании",
        ];
        return view('about', [
            'page'=>$page,
            'seo' => $seo,
        ]);
    }
    public function library_online()
    {
        $inner_types = LibraryPdf::where('brand_id', null)->paginate(16);

        $seo = (object)[
            'title' => "Библиотека каталогов",
            'subtitle' => "Библиотека каталогов",
            'keywords' => "Библиотека каталогов",
        ];

        return view('catalog-library', [
            "inner_types" => $inner_types,
            'seo' => $seo,
        ]);
    }

    public function catalog_online($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $inner_type = LibraryPdf::Where('slug', $slug)->first();
        return view('catalog-online', [
            "inner_type"=>$inner_type,
            'seo' => $seo,
        ]);
    }
    public function catalog_brand(){
        $untr_inner_types = Brand::paginate(16);
        $inner_types = $this->translateCollection($untr_inner_types ,app()->getLocale());

        $seo = (object)[
            'title' => "Бренды",
            'subtitle' => "Бренды",
            'keywords' => "Бренды",

        ];
        return view('catalog-brand', [
            'inner_types'=>$inner_types,
            'seo' => $seo,
        ]);
    }
    public function catalog_brand_page($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $untrBrand = Brand::Where('slug', $slug)->first();

        $brand = $untrBrand->translate(app()->getLocale());

        $seo = (object)[];

        if ($brand instanceof Brand) {
            $seo = (object)[
                'title' => $brand->seo_title,
                'subtitle' => $brand->seo_description,
                'keywords' => $brand->seo_keywords,

            ];
        }

        return view('catalog-brand-inner', [
            'brand'=>$brand,
            'seo' => $seo,

        ]);
    }
    public function partners(){
        $untrPart = Partner::paginate(16);
        $partners = $this->translateCollection($untrPart ,app()->getLocale());

        $seo = (object)[
            'title' => "Наши партнеры",
            'subtitle' => "Наши партнеры",
            'keywords' => "Наши партнеры",

        ];
        return view('partners', [
            'partners'=>$partners,
            'seo' => $seo,
        ]);
    }
    public function partners_inner($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $untrPartner = Partner::Where('slug', $slug)->first();

        $partner = $untrPartner->translate(app()->getLocale());


        $seo = (object)[];

        if ($partner instanceof Partner) {
            $seo = (object)[
                'title' => $partner->seo_title,
                'subtitle' => $partner->seo_description,
                'keywords' => $partner->seo_keywords,

            ];
        }

        return view('partners-inner', [
            'partner'=>$partner,
            'seo' => $seo,
        ]);
    }
    public function offers(){
        $untrOff = Offer::paginate(4);
        $offers = $this->translateCollection($untrOff ,app()->getLocale());


        $seo = (object)[
            'title' => "Спецпредложения",
            'subtitle' => "Спецпредложения",
            'keywords' => "Спецпредложения",

        ];
        return view('offers', [
            'offers'=>$offers,
            'seo' => $seo,
        ]);
    }
    public function reviews(){
        $untrReviews = Review::paginate(16);
        $reviews = $this->translateCollection($untrReviews ,app()->getLocale());

        $seo = (object)[];

        $seo = (object)[
            'title' => "Отзывы",
            'subtitle' => "Отзывы",
            'keywords' => "Отзывы",

        ];

        return view('reviews', [
            'reviews'=>$reviews,
            'seo' => $seo,
        ]);
    }
    public function reviews_inner($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $untrReview = Review::Where('slug', $slug)->first();

        $review = $untrReview->translate(app()->getLocale());


        $seo = (object)[];

        if ($review instanceof Review) {
            $seo = (object)[
                'title' => $review->seo_title,
                'subtitle' => $review->seo_description,
                'keywords' => $review->seo_keywords,

            ];
        }

        return view('reviews-inner', [
            'review'=>$review,
            'seo' => $seo,
        ]);
    }
    public function offers_inner($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $untrOff = Offer::Where('slug', $slug)->first();

        $offer = $untrOff->translate(app()->getLocale());

        $seo = (object)[];

        if ($offer instanceof Offer) {
            $seo = (object)[
                'title' => $offer->seo_title,
                'subtitle' => $offer->seo_description,
                'keywords' => $offer->seo_keywords,

            ];
        }

        return view('offers-inner', [
            'offer'=>$offer,
            'seo' => $seo,
        ]);
    }

    public function news(){
        $untrNews = News::paginate(16);
        $news = $this->translateCollection($untrNews ,app()->getLocale());

        $seo = (object)[
            'title' => "Новости",
            'subtitle' => "Новости",
            'keywords' => "Новости",

        ];

        return view('news',[
            'news'=>$news,
            'seo' => $seo,
        ]);
    }
    public function news_inner($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $untrNews = News::Where('slug', $slug)->first();

        $news = $untrNews->translate(app()->getLocale());

        $seo = (object)[];

        if ($news instanceof News) {
            $seo = (object)[
                'title' => $news->seo_title,
                'subtitle' => $news->seo_description,
                'keywords' => $news->seo_keywords,

            ];
        }

        return view('news-inner', [
            'news'=>$news,
            'seo' => $seo,
        ]);
    }
    public function media(){
        $untrMeds = Med::paginate(12);
        $meds = $this->translateCollection($untrMeds ,app()->getLocale());
        return view('media',[
            'meds'=>$meds,
            'seo' => $seo,
        ]);
    }
    public function media_inner($locale,$slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $untrNews = Med::Where('slug', $slug)->first();

        $news = $untrNews->translate(app()->getLocale());

        $seo = (object)[];

        if ($news instanceof Med) {
            $seo = (object)[
                'title' => $news->seo_title,
                'subtitle' => $news->seo_description,
                'keywords' => $news->seo_keywords,

            ];
        }

        return view('media-inner', [
            'med'=>$news,
            'seo' => $seo,
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
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $type = Type::where("slug", $slug)->first();
        if (!$type) {
            abort(404, 'Type not found');
        }
        $transtype = $type->translate(app()->getLocale());

        // Получаем коллекцию подтипов с пагинацией
        $untrProds = $type->subtypes()->paginate(10); // Примените нужный вам размер страницы

        // Переводим коллекцию с учетом пагинации
        $prods = $this->translateCollection($untrProds, app()->getLocale());

        // Проверка на тип объекта
        if (!($prods instanceof \Illuminate\Pagination\LengthAwarePaginator)) {
            throw new \Exception('Expected a LengthAwarePaginator instance.');
        }

        $seo = (object)[];

        if ($transtype instanceof Type) {
            $seo = (object)[
                'title' => $transtype->seo_title,
                'subtitle' => $transtype->seo_description,
                'keywords' => $transtype->seo_keywords,

            ];
        }
        return view('catalog-inner', [
            'products' => $prods,
            'type' => $transtype,
            'seo' => $seo,
        ]);
    }



    public function catalog_library(){
        $untrTypes = Type::paginate(12);
        $inner_types = $this->translateCollection($untrTypes ,app()->getLocale());

        $seo = (object)[];

        if ($inner_types instanceof Type) {
            $seo = (object)[
                'title' => $inner_types->seo_title,
                'subtitle' => $inner_types->seo_description,
                'keywords' => $inner_types->seo_keywords,

            ];
        }
        return view('catalog', [
            'inner_types'=>$inner_types,
            'seo' => $seo,
        ]);
    }
    public function catalog_brand_inner($locale, $slug) {
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $type = Brand::where("slug", $slug)->first();
        if (!$type) {
            abort(404, 'Type not found');
        }
        $transtype = $type->translate(app()->getLocale());
        $untrProds = $type->products; // Получаем коллекцию продуктов
        $prods = $this->translateCollection($untrProds, app()->getLocale());

        $seo = (object)[];

        if ($transtype instanceof Brand) {
            $seo = (object)[
                'title' => $transtype->seo_title,
                'subtitle' => $transtype->seo_description,
                'keywords' => $transtype->seo_keywords,

            ];
        }
        return view('catalog-library-inner', [
            'products' => $prods,
            'brand' => $transtype,
            'seo' => $seo,
        ]);
    }


    public function service(){
        $untrpage = CustomPage::findOrFail(2);
        $page = $untrpage->translate(app()->getLocale());

        $videos = Video::Where("type", "service")->get();

        $untrNews = AdvNews::where('type', 'service')->paginate(99);
        $news = $this->translateCollection($untrNews ,app()->getLocale());

        $untrEx = OtherExtraBlock::where('page', 'service')->paginate(99);
        $blocks = $this->translateCollection($untrEx ,app()->getLocale());
        $seo = (object)[];

        if ($page instanceof CustomPage) {
            $seo = (object)[
                'title' => $page->seo_title,
                'subtitle' => $page->seo_description,
                'keywords' => $page->seo_keywords,

            ];
        }
        return view('service', [
            'page'=>$page,
            'videos'=>$videos,
            'news'=>$news,
            'blocks'=>$blocks,
            'seo' => $seo,
        ]);
    }
    public function spares(){
        $untrpage = CustomPage::findOrFail(3);
        $page = $untrpage->translate(app()->getLocale());

        $videos = Video::Where("type", "spares")->get();

        $untrNews = AdvNews::where('type', 'spares')->paginate(99);
        $news = $this->translateCollection($untrNews ,app()->getLocale());
        $untrEx = OtherExtraBlock::where('page', 'spares')->paginate(99);
        $blocks = $this->translateCollection($untrEx ,app()->getLocale());

        $seo = (object)[];

        if ($page instanceof CustomPage) {
            $seo = (object)[
                'title' => $page->seo_title,
                'subtitle' => $page->seo_description,
                'keywords' => $page->seo_keywords,

            ];
        }

        return view('spares', [
            'page'=>$page,
            'videos'=>$videos,
            'news'=>$news,
            'blocks'=>$blocks,
            'seo' => $seo,
        ]);
    }
    public function contacts(){
        $seo = (object)[
            'title' => "Контакты",
            'subtitle' => "Контакты",
            'keywords' => "Контакты",

        ];
        return view('contacts', [
            'seo' => $seo,
        ]);
    }

    public function policy(){

        $seo = (object)[
            'title' => "Политика конфиденциальности",
            'subtitle' => "Политика конфиденциальности",
            'keywords' => "Политика конфиденциальности",

        ];

        return view('policy', [
            'seo' => $seo,
        ]);
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
