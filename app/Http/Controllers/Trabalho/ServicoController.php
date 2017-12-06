<?php

namespace App\Http\Controllers\Trabalho;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvaliaRequest;
use App\Http\Requests\PessoaRequest;
use App\Pessoa;
use App\avalia;
use Illuminate\Support\Facades\Session;
use Validator;
use Request;
use Illuminate\Support\Facades\Input;


class ServicoController extends Controller
{


    public function index(){



        return view ('servicos.index' );


    }



    public function listar(){
        $data =['data'=>Pessoa::orderby('telefone')->paginate(5)];
      //  $registros= Pessoa::all();

        return view('servicos.lista',$data); //compact('registros'));

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
            $ex =$imagem->guessClientExtension(); //exten�ao
            $nomeImagem="imagem_".$num.",".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] =$dir."/".$nomeImagem;

        }
        // metodo que salva no manco de dados





           Pessoa::create($req->all());

            Session::flash('sucess','Mensagem enviada com sucesso');
        return redirect()->route('site.home');

    }


    public function busca(){

            $pesq = Input::get('pesq'); //pega o input name



        $resultado = Pessoa::where('cpf', '=',$pesq)->orderby('nome','asc')->get();




                //->orwhere('telefone','like','%'.input::get('nome').'%')

                return view('servicos.busca',$resultado)->with('resultado', $resultado);
}

public function consultar(){

    return view('servicos.consultar');
}
    public function lista(){


              $nome=Input::get('consultanome');
              $cpf=Input::get('consultacpf');
                if($resultado = Pessoa::where('nome','=',$nome)->where('cpf','=',$cpf)->orderby('id','asc')->get()){


        return view('servicos.listaconsulta',$resultado)->with('resultados', $resultado);
    }

    }
    public function avalia(AvaliaRequest  $ed){


            $resp= $ed->input('fb');
            $res= $ed->input('comentario');

        avalia::create(array('fb'=>$resp,'comentario'=>$res));


        return redirect()->route('site.home')->with('sucess', ' Obrigado por nos ajudar!');
        ;



    }

}
