<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class BookItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookitems')->insert([
            'title'=> "pavadinimas",
            'bookcode'=> "kodas",
            'pages'=> "100",
            'descrioption'=> "gera knyga",
            'author_id'=> "autorius",
        ]);
    }
}
