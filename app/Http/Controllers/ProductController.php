<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Video;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($locale, $slug){
        // Получаем текущий продукт по его slug
        $untrProduct = Product::Where('slug', $slug)->first();

        // Получаем все продукты из той же категории, исключая текущий продукт
        $untrProducts = Product::where('type', $untrProduct->type)
                               ->where('id', '!=', $untrProduct->id)
                               ->orderBy('created_at', 'desc')
                               ->paginate(3);

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
