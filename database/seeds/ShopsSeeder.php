<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
        	'name'=>'Zara',
        	'description'=>'tienda de ropa',
        	'password'=>'1234',
        	'email'=>'zara@inditex.es',
        	'likes'=>'1458'
        ]);
        DB::table('shops')->insert([
        	'name'=>'Mango',
        	'description'=>'tienda de ropa',
        	'password'=>'1234',
        	'email'=>'mango@mango.es',
        	'likes'=>'1458'
        ]);
        DB::table('shops')->insert([
        	'name'=>'Decathlon',
        	'description'=>'tienda de deportes',
        	'password'=>'1234',
        	'email'=>'decathlon@decathlon.es',
        	'likes'=>'1458'
        ]);
    }
}
