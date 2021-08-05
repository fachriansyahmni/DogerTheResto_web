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
            'password' => bcrypt('admin'),
            'role_id' => 1
        ]);
        $admin->assignRole("admin");
        $admin->save();

        $user = User::create([
            'username' => 'pelayan',
            'name' => 'Pelayan',
            'password' => bcrypt('pelayan'),
            'role_id' => 3
        ]);
        $user->assignRole("pelayan");
        $user->save();

        $koki = User::create([
            'username' => 'koki',
            'name' => 'koki',
            'password' => bcrypt('koki'),
            'role_id' => 4
        ]);
        $koki->assignRole("koki");
        $koki->save();

        $kasir = User::create([
            'username' => 'kasir',
            'name' => 'Kasir',
            'password' => bcrypt('kasir'),
            'role_id' => 5
        ]);
        $kasir->assignRole("kasir");
        $kasir->save();
    }
}
