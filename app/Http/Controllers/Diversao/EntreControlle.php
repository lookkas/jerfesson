<?php

namespace App\Http\Controllers\Diversao;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EntreControlle extends Controller
{
    public function index(){



        return view('Diversao.Principal');
    }
}
