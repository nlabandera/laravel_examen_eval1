<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
        DB::table('products')->insert([
        	'name'=>'chaqueta',
        	'description'=>'chaqueta roja',
        	'stock'=>'12',
        	'price'=>'50'
        ]);
    }
}
