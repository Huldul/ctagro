<?php

namespace App\Http\Controllers;

use App\Models\MapKey;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show($id, $locale)
    {
        // Получение не переведенной карты по идентификатору
        $untrmap = MapKey::findOrFail($id);

        // Перевод карты на текущий локаль
        $map = $untrmap->translate(app()->getLocale());

        // Преобразование переведенной карты в массив
        $mapArray = $map->toArray();

        // Преобразование массива в JSON
        $json = json_encode($mapArray);

        // Вывод JSON для отладки
        dd($json);
    }

}
