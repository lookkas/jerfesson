<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pessoa;
class HomeController extends Controller
{
   public function index(){

       $cursos = Pessoa::all(); //trazendo os cursos
       return view('home',compact('cursos'));


   }
}
