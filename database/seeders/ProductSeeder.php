<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(['name'=>'abanoub','price'=>'50','category'=>'vegetables','description'=>'bgfbrfb','gallery'=>'bob']);

    }
}
