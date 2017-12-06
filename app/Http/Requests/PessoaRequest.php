<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Http\Requests\Request;



 class PessoaRequest extends FormRequest
 {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

            'nome'=>'required|min:3',
            'uf'=>'required',
            'telefone'=>'required',
            'endereco'=>'required|min:3',
            'cidade'=>'required|min:3',
            'email'=>'required|min:3',
            'comentario'=>'required',



    ];


    }
     public function messages(){


         return[



         ];
     }



 }
