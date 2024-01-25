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
            ]
        ]);
    }
}
