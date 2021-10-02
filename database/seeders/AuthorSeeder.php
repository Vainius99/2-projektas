<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            'name'=> "vardas",
            'surename'=> "pavarde",
            'username'=> "slapyvardis",
        ]);
    }
}
