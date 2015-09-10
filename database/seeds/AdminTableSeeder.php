<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'first_name' => 'Duilio',
            'last_name' => 'Duilio',
            'email' => 'i@duilio.me',
            'password' => \Hash::make('secret'),
            'type' => 'admin'
        ));
    }
}