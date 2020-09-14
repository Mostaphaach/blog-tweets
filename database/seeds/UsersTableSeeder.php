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
            'name' => 'Hicham',
            'email' => 'hicham@hicham.com',
            'password' => bcsqrt('hicham1977'),
        ]);
        factory(User::class, 10)->create();
    }
}
