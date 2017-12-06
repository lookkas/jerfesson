<?php

namespace App\Http\Controllers\Atualizar;



use Illuminate\Http\Request;
use App\Http\Requests\PessoaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use App\statu;
use App\Pessoa;
use App\DB;

use Auth;


class AtualizarController extends Controller
{
            public function  index(){



}




    /*public function index(){
        $reg = statu::all();
        return view('admin.cursos.index',compact('reg'));
    }*/

 public function salvar(Request $form, statu $contato){



     $contato->peste=$form->get('peste');
     $contato->id_pes=$form->get('id_pes');
     dd($contato);




     $contato->save();

                     //$res = $form->all();
                   // $reg = statu::create($res);
             //  reserva:v:create($res);

                  //Pessoa::create($res);
          return view('Diversao.Principal', compact('contatos' ));

 }


    public function atualizar($id){


        $resultado = Pessoa::all();



        return view ('servicos.lista',compact('resultado'));



}


}
