<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'id' => 1,
            'name' => 'Rawan Nader',
            'email' => 'admin@admin.com',
            'password' => bcrypt(12345678),
            'remember_token' =>Str::random(10),
        ]);
    }
}
