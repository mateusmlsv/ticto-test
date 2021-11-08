<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@hotmail.com',
            'password' => Hash::make('password'),
            'admin' => true,
            'birthday' => Carbon::now(),
            'cpf' => '267.626.870-83',
            'cep' => '01311919',
            'address' => 'Avenida Paulista, 1009',
            'district' => 'Bela Vista',
            'city' => 'São Paulo',
            'number' => '123'
        ]);

        DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@hotmail.com',
            'password' => Hash::make('password'),
            'admin' => false,
            'birthday' => Carbon::now(),
            'cpf' => '829.860.030-44',
            'cep' => '17010130',
            'address' => 'Avenida Nações Unidas',
            'district' => 'Centro',
            'city' => 'Bauru',
            'number' => '321'
        ]);
    }
}
