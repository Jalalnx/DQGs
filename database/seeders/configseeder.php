<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;;

class configseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('configs')->insert([
            'id' => 1,
            'name' => 'Daroat',
            'email' => 'jalalnx99@gmail.com',
            'password' =>'',
        ]);
    }
}
