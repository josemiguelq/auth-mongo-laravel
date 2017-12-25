<?php

use Illuminate\Database\Seeder;

class PointOfSalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('point_of_sales')->delete();

        DB::collection('point_of_sales')->insert($data = [
            'network_control_id' => '1234',
            'name' => 'Loja do Jack',
            'country_code_prefix' => '55',
            'area_code_prefix' => '67',
            'lat' => '24.13',
            'long' => '23',
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

        DB::collection('point_of_sales')->insert($data = [
            'network_control_id' => '1234',
            'name' => 'Loja da Ana',
            'country_code_prefix' => '55',
            'area_code_prefix' => '67',
            'lat' => '24.13',
            'long' => '23',
            'users' => [
                [
                    'name'=> 'Ricardo',
                    'email' => 'ricardo@r.com',
                    'cpf' => '12978564313',
                    'password' => bcrypt('91910048'),
                ]
            ]
        ]);


    }
}
