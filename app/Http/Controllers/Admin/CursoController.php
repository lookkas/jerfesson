<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;
class CursoController extends Controller
{
    public function index(){
        $registros = Curso::all();
        return view('admin.cursos.index',compact('registros'));
    }


    public function adicionar(){


        return view ('admin.cursos.adicionar');


    }
    public function salvar(Request $req){ //o metodo request pehga os dados




            $dados =$req->all();

                    if(isset($dados['publicado'])){


                        $dados['publicado']='sim';

                    }else{

                        $dados['publicado']= 'nao';

                    }
                 if($req->hasfile('imagem')){
            
                     $imagem=$req->file('imagem');
                     $num = rand(1111,9999);
                     $dir = 'img/cursos/';
                     $ex =$imagem->guessClientExtension(); //exten�ao
                     $nomeImagem="imagem_".$num.",".$ex;
                     $imagem->move($dir,$nomeImagem);
                     $dados['imagem'] =$dir."/".$nomeImagem;


                 }





                   // return view ('admin.cursos.salvar');
                    Curso::create($dados);
                    return redirect()->route('admin.cursos');


    }
    public function editar($id){

        $registro =  Curso::find($id);
        return view('admin.cursos.editar',compact('registro'));


    }
    public function atualizar(Request $req, $id){ //o metodo request pehga os dados

        $dados =$req->all();

        if(isset($dados['publicado'])){


            $dados['publicado']='sim';

        }else{

            $dados['publicado']= 'nao';

        }
        if($req->hasfile('imagem')){

            $imagem=$req->file('imagem');
            $num = rand(1111,9999);
            $dir = 'img/cursos/';
            $ex =$imagem->guessClientExtension(); //exten�ao
            $nomeImagem="imagem_".$num.",".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] =$dir."/".$nomeImagem;


        }


        // return view ('admin.cursos.salvar');
        Curso::find($id)->update($dados);
        return redirect()->route('admin.cursos');


    }

    public function deletar($id){



        Curso::find($id)-> delete();

        return redirect()->route('admin.cursos');
    }

}
