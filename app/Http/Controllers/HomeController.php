<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        if(Auth::guard("tutor")->check()) {
            return redirect()->route('tutor.index');
        }
        return view('index');
    }
}
