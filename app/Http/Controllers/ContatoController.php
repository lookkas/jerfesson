<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
class ContatoController extends Controller
{

    public function index(){



        $contatos =[

            (object)["nome"=>"Lucas","tel"=>"898989"],
            (object)["nome"=>"Pedro","tel"=>"8943989"],






        ];//compact serve para mandar a lista para html


        $contato = new Contato();
        $con=$contato->lista();
        dd( $con->nome);
        return view('contato.index',compact('contatos'));//contato � o diretorio e a index � o qrquivo
    }

    public function editar(){

        return "Esse � o editar de contato";
    }
    public function criar(Request $req){
                       dd($req->all());
        return "Esse � o criar de contato";
    }
    //
}


