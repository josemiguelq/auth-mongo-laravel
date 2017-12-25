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

        ]);
    }
}
