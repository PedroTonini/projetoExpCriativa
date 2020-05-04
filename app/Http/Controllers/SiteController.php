<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use App\Models\Promocao;
use App\Models\Colaborador;

class SiteController extends Controller
{
    public function index(){
        return view('cliente.avaliar');
    }

}