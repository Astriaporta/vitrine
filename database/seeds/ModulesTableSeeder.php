<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('modules')->insert([
        'position' => 1,
        'prefix' => null,
        'name' => 'Home',
        'resume' => null,
        'activated' => true,
      ]);
      DB::table('modules')->insert([
        'position' => 2,
        'prefix' => 'about',
        'name' => 'A propos',
        'resume' => null,
        'activated' => true,
      ]);
      DB::table('modules')->insert([
        'position' => 3,
        'prefix' => 'news',
        'name' => 'News',
        'resume' => null,
        'activated' => false,
      ]);
      DB::table('modules')->insert([
        'position' => 4,
        'prefix' => 'contact',
        'name' => 'Contact',
        'resume' => null,
        'activated' => true,
      ]);
      DB::table('modules')->insert([
        'position' => 5,
        'prefix' => 'contact/list',
        'name' => 'Liste de contacts',
        'resume' => null,
        'activated' => true,
      ]);
      DB::table('modules')->insert([
        'position' => null,
        'prefix' => 'login',
        'name' => 'Connection',
        'resume' => null,
        'activated' => true,
      ]);
      DB::table('modules')->insert([
        'position' => null,
        'prefix' => 'logout',
        'name' => 'Déconnection',
        'resume' => null,
        'activated' => true,
      ]);
      DB::table('modules')->insert([
        'position' => null,
        'prefix' => 'register',
        'name' => 'S\'enregistrer',
        'resume' => null,
        'activated' => false,
      ]);
      DB::table('modules')->insert([
        'position' => null,
        'prefix' => 'contact/infos',
        'name' => 'Information contact',
        'resume' => null,
        'activated' => false,
      ]);
      DB::table('modules')->insert([
        'position' => 99,
        'prefix' => 'parameters',
        'name' => 'Paramètres',
        'resume' => null,
        'activated' => false,
      ]);
    }
}
