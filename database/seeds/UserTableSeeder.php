<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for($i = 0; $i < 30 ; i++){

            $id = \DB::table('users')->insert(array(
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->email,
                'password' => \Hash::make('123456'),
                'type' => 'user'
            ));

            \DB::table('user_profiles')-> insert(array(
                'user_id'   => $id,
                'bio'       => $faker->paragraph(rand(2, 5)),
                'website'   => 'http://www.' . $faker->url,
                'twitter'   => 'http://www.twitter.com/' . $faker->userName,
            ));
        }
    }
}