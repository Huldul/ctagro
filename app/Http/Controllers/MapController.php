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

        // Преобразование атрибутов переведенного объекта в массив
        $mapArray = $map->getAttributes();

        // Возвращение массива в формате JSON
        return response()->json($mapArray, 200, [], JSON_UNESCAPED_UNICODE);
    }


}
