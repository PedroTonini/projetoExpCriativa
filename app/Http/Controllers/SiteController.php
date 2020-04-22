<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use App\Models\Promocao;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }

    public function meta(){
        return view('meta');
    }

    public function saveMeta(){
        $meta = new Meta();

        $meta->nome = request('nome');
        $meta->meta = request('meta');
        $meta->save();
        
        return view('index');
    }

    public function promo(){
        return view('promo');
    }

    public function savePromo(){
        $promo = new Promocao();
        $promo->nome = request('nome');
        $promo->promocao = request('promo');
        $promo->save();
        
        return view('index');
    }

    public function colaborador(){
        return view('colaborador');
    }

    public function saveColaborador(){
        $promo = new Colaborador();
        $promo->nome = request('nome');
        $promo->save();
        
        return view('index');
    }
}
