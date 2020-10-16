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
            'name' => 'Luis Navarro',
            'email' => 'luisCode',
            'rol' => 'Usuario',
            'password' => Hash::make('12345678'),
        ]);
    }
}
