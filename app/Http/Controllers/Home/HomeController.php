<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PessoaRequest;
class HomeController extends Controller
{



    public function index(){



        return view('Home.sobre');
    }

public function servicos(){





    return view("Home.servicos");
}

public function contatos(){





    return view("Home.contatos");
}

    public function salvar(PessoaRequest $req){


        // $validator= Validator::make(
        // ['nome'=> Request::input('name')],
        //['nome'=>'required|min:3']

        //  );
        // if($validator->fails()){

        //  $ms=$validator->messages();

        //  dd($ms);


        // return redirect()->route('site.home');


        // }



        $dados = $req->all();



        if($req->hasfile('imagem')){

            $imagem=$req->file('imagem');
            $num = rand(1111,9999);
            $dir = 'img/cursos/';
            $ex =$imagem->guessClientExtension(); //exten?ao
            $nomeImagem="imagem_".$num.",".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] =$dir."/".$nomeImagem;

        }
        // metodo que salva no manco de dados





        Pessoa::create($req->all());

        Session::flash('sucess','Mensagem enviada com sucesso');
        return redirect()->route('site.home');

    }





}
