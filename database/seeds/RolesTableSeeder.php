<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('roles')->delete();

        DB::collection('roles')->insert($data = [
            'name' => 'Administrador',
            'slug' => 'administrador',
            'users' => [
                [
                    'name'=> 'Jose Miguel',
                    'email' => 'jose@jose.com',
                    'cpf' => '22978564313',
                    'password' => bcrypt('91910048'),
                ],
                [
                    'name'=> 'Jackson Miras',
                    'email' => 'jack@jack.com',
                    'cpf' => '22978564312',
                    'password' => bcrypt('91910048'),
                ]
            ]
        ]);

        DB::collection('roles')->insert($data = [
            'name' => 'Vendedor de Rua',
            'slug' => 'vendedor-de-rua',
            'users' => [
                [
                    'name'=> 'Ricardo',
                    'email' => 'ricardo@r.com',
                    'cpf' => '12978564313',
                    'password' => bcrypt('91910048'),
                ],
                [
                    'name'=> 'Anderson',
                    'email' => 'anderson@a.com',
                    'cpf' => '12978564312',
                    'password' => bcrypt('91910048'),
                ]
            ]
        ]);


    }
}
