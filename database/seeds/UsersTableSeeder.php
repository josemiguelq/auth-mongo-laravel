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
        DB::collection('users')->delete();

        DB::collection('users')->insert($data = [
            'name'=> 'Jose Miguel',
            'email' => 'jose@jose.com',
            'cpf' => '22978564313',
            'password' => bcrypt('91910048')
        ]);
    }
}
