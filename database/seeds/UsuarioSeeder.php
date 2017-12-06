<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


  $dados = [

  'name' =>"lucas",
  'email' =>"lucas@gmail.com",
  'password' => bcrypt("a123456") // criação ,
    ] ;
             if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
                 echo "usuairio alterado";


        }else{
                  User::create($dados);
                 echo "usuairio Criado";
             }

        //
    }
}
