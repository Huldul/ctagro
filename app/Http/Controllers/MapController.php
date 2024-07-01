<?php

namespace App\Http\Controllers;

use App\Models\MapKey;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show($id)
{
    // Получение не переведенной карты по идентификатору
    $untrmap = MapKey::findOrFail($id);

    // Перевод карты на текущий локаль
    $map = $untrmap->translate(app()->getLocale());

    // Преобразование атрибутов переведенного объекта в массив
    $mapArray = [
        'id' => $map->id,
        'slug' => $map->slug,
        'head_title' => $map->head_title,
        'subtitle1' => $map->subtitle1,
        'subtitle2' => $map->subtitle2,
        'title1' => $map->title1,
        'title2' => $map->title2,
        'title3' => $map->title3,
        'title4' => $map->title4,
        'name1' => $map->name1,
        'name2' => $map->name2,
        'name3' => $map->name3,
        'name4' => $map->name4,
        'num1' => $map->num1,
        'num2' => $map->num2,
        'num3' => $map->num3,
        'num4' => $map->num4,
        'email1' => $map->email1,
        'email2' => $map->email2,
        'email3' => $map->email3,
        'email4' => $map->email4,
        'created_at' => $map->created_at,
        'updated_at' => $map->updated_at,
    ];

    // Преобразование массива в JSON
    $json = json_encode($mapArray);

    // Вывод JSON для отладки
    dd($json);
}


}
