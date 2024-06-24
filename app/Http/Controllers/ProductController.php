<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('stocks.warehouse')->get();
        $result = array_map(static function($item) {
            $stocks = [];
            foreach ($item['stocks'] as $stock) {
                $stocks[] = ['stock_name' => $stock['warehouse']['name'], 'count' => $stock['stock']];
            }
            return ['price' => $item['price'], 'id' => $item['id'], 'name' => $item['name'], 'stocks' => $stocks];
        }, $products->toArray());
        return response()->json($result);
    }
}
