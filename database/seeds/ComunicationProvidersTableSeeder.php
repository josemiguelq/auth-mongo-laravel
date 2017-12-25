<?php

use Illuminate\Database\Seeder;

class ComunicationProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('comunication_providers')->delete();

        DB::collection('comunication_providers')->insert($data = [
            'name' => 'Claro',
            'slug' => 'claro',
            'subdivision' => [
                [
                    'comunication_provider_control_id' => '1234',
                    'name' => 'Regional SP1',
                    'networks' => [
                        [
                            'name' => 'Via Varejo',
                            'pos' => [
                                [
                                    'provider_control_id' =>'RSW1937',
                                    'network_control_id' =>'RSW1937',
                                    'name' => 'Loja Tambore',
                                    'country_code_prefix' => '55',
                                    'area_code_prefix' => '11',
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
                                ],
                                [
                                    'provider_control_id' =>'ASW1937',
                                    'network_control_id' =>'ASW1937',
                                    'name' => 'Loja Iguatemi',
                                    'country_code_prefix' => '55',
                                    'area_code_prefix' => '11',
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

                                ]
                            ]
                        ],
                        [
                            'name' => 'Carrefour',
                            'pos' => [
                                [
                                    'provider_control_id' =>'RSW1937',
                                    'network_control_id' =>'RSW1937',
                                    'name' => 'Loja do Jack',
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
                        ]
                    ],
                ],
                [

                    'comunication_provider_control_id' => '1234',
                    'name' => 'Regional CO',
                    'networks' => [
                        [
                            'name' => 'Comper',
                            'pos' => [
                                [
                                    'provider_control_id' =>'RSW1937',
                                    'network_control_id' =>'RSW1937',
                                    'name' => 'Comper da Ceara',
                                    'country_code_prefix' => '55',
                                    'area_code_prefix' => '11',
                                    'lat' => '24.13',
                                    'long' => '23'
                                ],
                                [
                                    'provider_control_id' =>'ASW1937',
                                    'network_control_id' =>'ASW1937',
                                    'name' => 'Comper Bandeirantes',
                                    'country_code_prefix' => '55',
                                    'area_code_prefix' => '11',
                                    'lat' => '24.13',
                                    'long' => '23'
                                ]
                            ]
                        ],
                        [
                            'name' => 'Pao de Acucar',
                            'pos' => [
                                [
                                    'provider_control_id' =>'RSW1937',
                                    'network_control_id' =>'RSW1937',
                                    'name' => 'Loja do Jack',
                                    'area_code_prefix' => '67',
                                    'lat' => '24.13',
                                    'long' => '23'
                                ]
                            ]
                        ]
                    ],
                ]
            ]
        ]);




    }
}
