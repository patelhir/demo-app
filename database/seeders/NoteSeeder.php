<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('notes')->insert([
            ['content' => 'Note1', 'merchant_id'=>1,'created_at' => now(),'updated_at' => now()],
            ['content' => 'Note2','merchant_id'=>1,'created_at' => now(),'updated_at' => now()],
            ['content' => 'Note1','merchant_id'=>2,'created_at' => now(),'updated_at' => now()],
            ['content' => 'Note2','merchant_id'=>2,'created_at' => now(),'updated_at' => now()],
            ['content' => 'Note3','merchant_id'=>2,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}

