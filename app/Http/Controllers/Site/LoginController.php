<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validation;

class LoginController extends Controller
{
    public function index(){


        return view('login.index');

    }
    public function entrar(LoginRequest $req){



        $dados = $req-> all();
        if(Auth::attempt(['email'=>$dados['email'],'password'=> $dados['senha']])){
            return redirect()->route('site.servicos.listar' );

        }


        return redirect()->route('site.home' );

    }


    public function  sair(){

        Auth::logout();

        return redirect()->route( 'site.home'  );
    }
}
