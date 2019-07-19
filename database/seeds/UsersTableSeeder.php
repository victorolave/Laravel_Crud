<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Victor',
            'email' => 'victor@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
