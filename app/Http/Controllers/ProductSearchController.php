<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Subtype;

class ProductSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        try {
            // Поиск по продуктам
            $products = Product::where('title', 'LIKE', "%{$query}%")
                ->orWhereHas('type', function($q) use ($query) {
                    $q->where('title', 'LIKE', "%{$query}%");
                })
                ->orWhereHas('subtype', function($q) use ($query) {
                    $q->where('title', 'LIKE', "%{$query}%");
                })
                ->get();

            return response()->json($products);
        } catch (\Exception $e) {
            // Логирование ошибки
            Log::error('Error in search method: ' . $e->getMessage());
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}

