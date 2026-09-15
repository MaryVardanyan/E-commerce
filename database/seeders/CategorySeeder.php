<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([[
            'name' => 'молочные продукты',
            'slug' => 'molochnye-produkty',

        ],
        [
            'name' => 'яйцо',
            'slug' => 'yace',
            

        ],
        [
            'name' => 'мясо',
            'slug' => 'myaso',
            
        ],
        [
            'name' => 'рыба',
            'slug' => 'ryba',
            
        ],
        [
            'name' => 'фрукты и овощи',
            'slug' => 'frukty-i-ovoshchi',
            
        ]]
    );
    }
}
