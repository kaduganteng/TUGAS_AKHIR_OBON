<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'BAAK',
            'email' => 'BAAKadmin@gmail.com',
            'role' => 'BAAK',
            'npm'   => '123456789',
            'password' => bcrypt('12345678'),
        ];
        User::create($user);
        $user = [
            'name' => 'BAPSI',
            'email' => 'BAPSIadmin@gmail.com',
            'npm'   => '123456789',
            'role' => 'BAPSI',
            'password' => bcrypt('bapsi1234'),
        ];


        User::create($user);

        $user = [
            'name' => 'pembimbing',
            'email' => 'pembimbing@gmail.com',
            'npm'   => '123456789',
            'role' => 'pembimbing',
            'password' => bcrypt('pembimbing123'),
        ];


        User::create($user);
    }
}
