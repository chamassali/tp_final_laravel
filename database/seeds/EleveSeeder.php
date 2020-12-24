<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eleves')->insert([
            [
                "firstname"=> "Ali",
                "lastname"=> "Chamass",
                "email"=> "ali@ynov.com",
            ],
            [
                "firstname"=> "Clement",
                "lastname"=> "Llorens",
                "email"=> "clement@ynov.com",
            ],
        ]);

    }
}
