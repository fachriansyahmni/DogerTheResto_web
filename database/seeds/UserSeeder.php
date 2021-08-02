<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'username' => 'Admin',
            'name' => 'administrator',
            'password' => bcrypt('12345678'),
            'role_id' => 1
        ]);

        $admin->save();

        $user = User::create([
            'username' => 'pelayan',
            'name' => 'Pelayan',
            'password' => bcrypt('12345678'),
            'role_id' => 3
        ]);
        $user->save();

        $koki = User::create([
            'username' => 'koki',
            'name' => 'koki',
            'password' => bcrypt('12345678'),
            'role_id' => 4
        ]);
        $koki->save();

        $kasir = User::create([
            'username' => 'kasir',
            'name' => 'Kasir',
            'password' => bcrypt('12345678'),
            'role_id' => 5
        ]);
        $kasir->save();
    }
}
