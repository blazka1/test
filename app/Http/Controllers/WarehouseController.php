<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::all();
        $result = array_map(static function($item) {
            return ['name' => $item['name'], 'id' => $item['id']];
        }, $warehouses->toArray());
        return response()->json($result);
    }
}
