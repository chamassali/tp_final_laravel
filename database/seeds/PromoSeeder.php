<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([
            [
                "name"=> "B2",
                "specialty"=> "audio-visuel",
            ],
            [
                "name"=> "B2",
                "specialty"=> "informatique",
            ],
        ]);
    }
}
