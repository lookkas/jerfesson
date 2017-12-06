<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();
        DB::statement('SET foreign_key_checks=0;');
        $this->call(UsuarioSeeder::class); //passa com parametro
        $this->call(UserSeeder::class);
        DB::statement('SET foreign_key_checks =1;');
        Model::reguard();
    }
}
