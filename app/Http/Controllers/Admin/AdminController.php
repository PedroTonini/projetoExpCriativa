<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function auth() {
        if ( !Auth::user()->hasRole('admin') ) {
            Auth::logout();
        }
        return redirect('/admin/home');
    }
}
