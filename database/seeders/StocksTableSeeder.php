<?php

// использовать
// php artisan db:seed --class=StocksTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StocksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('stocks')->insert([
            ['product_id' => 1, 'warehouse_id' => 1, 'stock' => 100, 'created_at' => new \DateTime()],
            ['product_id' => 1, 'warehouse_id' => 2, 'stock' => 200, 'created_at' => new \DateTime()],
            ['product_id' => 2, 'warehouse_id' => 1, 'stock' => 150, 'created_at' => new \DateTime()],

        ]);
    }
}

