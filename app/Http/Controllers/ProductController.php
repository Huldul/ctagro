<?php

namespace App\Http\Controllers;

use App\Models\AdvNews;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Subtype;

class ProductController extends Controller
{
    public function subtypes($locale, $slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        $subtype = Subtype::where("slug", $slug)->first();
        if (!$subtype) {
            abort(404, 'Type not found');
        }
        $transtype = $subtype->translate(app()->getLocale());
        $untrProds = $transtype->products; // Получаем коллекцию продуктов
        $products = $this->translateCollection($untrProds, app()->getLocale());
        // Получаем все видео
        $seo = (object)[];

        if ($subtype instanceof Subtype) {
            $seo = (object)[
                'title' => $subtype->seo_title,
                'subtitle' => $subtype->seo_description,
                'keywords' => $subtype->seo_keywords,

            ];
        }

        // Возвращаем представление с переданными данными
        return view('products', [
            'products' => $products,
            'subtype' => $transtype,
            'seo' => $seo,
        ]);
    }
    public function show($locale, $slug){
        if (is_null($slug)) {
            $slug = $locale;
            $locale = app()->getLocale();
        }
        // Получаем текущий продукт по его slug
        $untrProduct = Product::with('subtype.parentSubtype.type')->where('slug', $slug)->with('blocks')->firstOrFail();

        // Получаем все продукты из той же категории, исключая текущий продукт
        $untrProducts = AdvNews::where('type', 'products')->paginate(99);

        // Переводим коллекцию продуктов
        $products = $this->translateCollection($untrProducts, app()->getLocale());

        // Переводим текущий продукт
        $product = $untrProduct->translate(app()->getLocale());

        // Получаем все видео
        $videos = Video::all();

        $seo = (object)[];

        if ($product instanceof Product) {
            $seo = (object)[
                'title' => $product->seo_title,
                'subtitle' => $product->seo_description,
                'keywords' => $product->seo_keywords,
            ];
        }
        // Возвращаем представление с переданными данными
        return view('products-inner', [
            'products' => $products,
            'product' => $product,
            'videos' => $videos,
            'seo' => $seo,
        ]);
    }




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
