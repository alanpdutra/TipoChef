<?php

use Illuminate\Database\Seeder;
use App\User;

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
           'name' => 'Álan Dutra',
           'email' => 'alanpd6@gmail.com',
           'password' => bcrypt('A300592z')
        ]);
    }
}
