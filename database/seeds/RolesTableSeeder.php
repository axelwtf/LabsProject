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
        DB::table('roles')->insert([
            'id' => '1',
            'type' => 'admin',
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'type' => 'editeur',
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'type' => 'membre',
        ]);

        //position
        DB::table('positions')->insert([
            'id' => '1',
            'name' => 'none',
        ]);
        DB::table('positions')->insert([
            'id' => '2',
            'name' => 'Admin',
        ]);
        DB::table('positions')->insert([
            'id' => '3',
            'name' => 'WebDev',
        ]);
        DB::table('positions')->insert([
            'id' => '4',
            'name' => 'Concepteur de DB',
        ]);
    }
}
