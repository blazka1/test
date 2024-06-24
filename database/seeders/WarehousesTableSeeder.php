<?php

// использовать
// php artisan db:seed --class=WarehousesTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehousesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('warehouses')->insert([
            ['name' => 'Warehouse 1', 'created_at' => new \DateTime()],
            ['name' => 'Warehouse 2', 'created_at' => new \DateTime()],
            ['name' => 'Warehouse 3', 'created_at' => new \DateTime()],
        ]);
    }
}


