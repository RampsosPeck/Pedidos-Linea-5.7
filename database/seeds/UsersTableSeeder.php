<?php

use Illuminate\Database\Seeder;
use Pedidoslinea\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'fullname' => 'Jorge Peralta',
    		'cedula' => '12345678',
    		'email' => 'jorge@gmail.com',
    		'password' => bcrypt('secret'),
    	]);
    }
}
