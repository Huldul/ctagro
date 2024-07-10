<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductSearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('title', 'LIKE', "%{$query}%")->get();

        return response()->json($products);
    }
}

