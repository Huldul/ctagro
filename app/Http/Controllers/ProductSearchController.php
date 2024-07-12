<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Subtype;
use Illuminate\Support\Facades\Log;

class ProductSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        try {
            Log::info('Search query received: ' . $query);

            // Поиск по продуктам
            $products = Product::where('title', 'LIKE', "%{$query}%")
                ->orWhereHas('subtype', function($q) use ($query) {
                    $q->where('title', 'LIKE', "%{$query}%");
                })
                ->get();

            Log::info('Products found: ' . $products->count());

            // Поиск по подтипам
            $subtypes = Subtype::where('title', 'LIKE', "%{$query}%")->get();

            Log::info('Subtypes found: ' . $subtypes->count());

            return response()->json([
                'products' => $products,
                'subtypes' => $subtypes,
            ]);
        } catch (\Exception $e) {
            // Логирование ошибки
            Log::error('Error in search method: ' . $e->getMessage());
            Log::error('Trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Server Error'], 500);
        }
    }
}

