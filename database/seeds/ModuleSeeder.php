<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            [
                "name"=> "php",
                "description"=> "trop bien laravel",
            ],
            [
                "name"=> "javascript",
                "description"=> "javascript > php",
            ],
        ]);
    }
}
