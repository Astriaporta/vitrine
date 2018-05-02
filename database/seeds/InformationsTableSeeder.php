<?php

use Illuminate\Database\Seeder;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('informations')->insert([
        'name' => null,
        'address' => null,
        'postalcode' => null,
        'city' => null,
        'country' => null,
        'phone' => null,
        'email' => null,
      ]);
    }
}
