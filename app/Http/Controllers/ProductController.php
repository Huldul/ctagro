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
        $subtype = Subtype::where("slug", $slug)->first();
        if (!$subtype) {
            abort(404, 'Type not found');
        }
        $transtype = $subtype->translate(app()->getLocale());
        $untrProds = $transtype->products; // Получаем коллекцию продуктов
        $products = $this->translateCollection($untrProds, app()->getLocale());
        // Получаем все видео


        // Возвращаем представление с переданными данными
        return view('products', [
            'products' => $products,
            'subtype' => $transtype,

        ]);
    }
    public function show($locale, $slug){
        // Получаем текущий продукт по его slug
        $untrProduct = Product::with('subtype.parentSubtype.type')->where('slug', $slug)->firstOrFail();

        // Получаем все продукты из той же категории, исключая текущий продукт
        $untrProducts = AdvNews::where('type', 'products');

        // Переводим коллекцию продуктов
        $products = $this->translateCollection($untrProducts, app()->getLocale());

        // Переводим текущий продукт
        $product = $untrProduct->translate(app()->getLocale());

        // Получаем все видео
        $videos = Video::all();

        // Возвращаем представление с переданными данными
        return view('products-inner', [
            'products' => $products,
            'product' => $product,
            'videos' => $videos,
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
