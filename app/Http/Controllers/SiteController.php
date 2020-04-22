<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;

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
}
