<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'administrador',
          'email' => 'administrador@gmail.com',
          'password' => bcrypt('1234'),
      ]);
        DB::table('users')->insert([
            'name' => 'basico',
            'email' => 'basico@gmail.com',
            'password' => bcrypt('1234'),
        ]);
    }
}
