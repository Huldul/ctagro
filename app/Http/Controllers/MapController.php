<?php

namespace App\Http\Controllers;

use App\Models\MapKey;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show($id, $locale){
        $untrmap = MapKey::findOrFail($id);
        $map = $untrmap->translate(app()->getLocale());
        dd($map);
    }
}
