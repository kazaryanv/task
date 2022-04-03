<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("titles")->insert([
            'slug' => "home-page",
            'title' => 'informacia dlya chaynikov',
            'description' => 'uznavayte bolshe',
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
