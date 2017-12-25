<?php

use Illuminate\Database\Seeder;

class NetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('networks')->delete();

        DB::collection('networks')->insert($data = [
            'name' => 'Via Varejo',
            'pos' => [
                [
                    'provider_control_id' =>'RSW1937',
                    'network_control_id' =>'RSW1937',
                    'name' => 'Loja Tambore',
                    'country_code_prefix' => '55',
                    'area_code_prefix' => '11',
                    'lat' => '24.13',
                    'long' => '23'
                ],
                [
                    'provider_control_id' =>'ASW1937',
                    'network_control_id' =>'ASW1937',
                    'name' => 'Loja Iguatemi',
                    'country_code_prefix' => '55',
                    'area_code_prefix' => '11',
                    'lat' => '24.13',
                    'long' => '23'
                ]
            ]
        ]);

        DB::collection('networks')->insert($data = [
            'name' => 'Carrefour',
            'pos' => [
                        [
                            'provider_control_id' =>'RSW1937',
                            'network_control_id' =>'RSW1937',
                            'name' => 'Loja do Jack',
                            'area_code_prefix' => '67',
                            'lat' => '24.13',
                            'long' => '23'
                        ],
                        [
                            'provider_control_id' =>'ASW1937',
                            'network_control_id' =>'ASW1937',
                            'name' => 'Loja da Ana Claudia',
                            'area_code_prefix' => '69',
                            'lat' => '24.13',
                            'long' => '23'
                        ]
                    ]
            ]);
    }
}
