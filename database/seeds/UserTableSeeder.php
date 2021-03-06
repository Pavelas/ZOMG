<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\User::class, 10)->create()->each(function($user) {
    		$user->clips()->saveMany(factory(App\Clip::class, rand(1, 10))->make());
    	});
    }
}
