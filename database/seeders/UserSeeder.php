<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
DB::table('users')->insert(['name'=>'abanoub','email'=>'abanobgayed@outlook.com','password'=>Hash::make('bob_bob2424')]);
    }
}
