<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('merchants')->insert([
            ['name' => 'Acme Corp','created_at' => now(),'updated_at' => now()],
            ['name' => 'Globex Inc','created_at' => now(),'updated_at' => now()],
            ['name' => 'Stark Industries','created_at' => now(),'updated_at' => now()],
            ['name' => 'Wayne Enterprises','created_at' => now(),'updated_at' => now()],
            ['name' => 'Umbrella Corporation','created_at' => now(),'updated_at' => now()],
        ]);
    }
}
