<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Purchases extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('purchases')->insert([
            [
                'user_id'=> 3,
                'total_price'=>9250,
                'preference_id'=>'533583724-24e54b93-d1bd-4319-8ec5-75b37c2a4cbf',
                'payment_id'=>1316725408,
                'state'=>'success',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id'=> 4,
                'total_price'=>4100,
               'preference_id' => '748293616-85d92a4b-f6c3-482e-9a5b-56e8e9a7c9ef',
                'payment_id' => 1627384923,
                'state'=>'success',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id'=> 3,
                'total_price'=>8000,
                'preference_id' => '294736218-39d74a3c-c1e2-471f-9d2a-84b16c9b8def',
                'payment_id' => 1948273610,
                'state'=>'pending',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
