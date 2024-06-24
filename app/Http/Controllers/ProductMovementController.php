<?php

namespace App\Http\Controllers;

use App\Models\ProductMovement;
use Illuminate\Http\Request;

class ProductMovementController extends Controller
{
    public function index(Request $request)
    {
        $query = ProductMovement::query();

        if ($request->has('product_id')) {
            $query->where('product_id', $request->product_id);
        }

        if ($request->has('warehouse_id')) {
            $query->where('warehouse_id', $request->warehouse_id);
        }

        if ($request->has('from_date')) {
            $query->where('movement_date', '>=', $request->from_date);
        }

        if ($request->has('to_date')) {
            $query->where('movement_date', '<=', $request->to_date);
        }

        $movements = $query->paginate($request->get('per_page', 15));

        return response()->json($movements->items());
    }
}
