<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alexis May',
            'email' => 'alexisCode',
            'rol' => 'Administrador',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Buho Solutions',
            'email' => 'Buho_solutions',
            'rol' => 'Administrador',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Uriel',
            'email' => 'UrielCode',
            'rol' => 'Administrador',
            'password' => Hash::make('12345678'),
        ]);
    }
}
