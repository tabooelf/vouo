<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class HomeController extends Controller
{
    public function index(Request $request, Redirector $redirector){
        $best = Good::best(8);
        // $request->session()->forget('_token');
        // $request->session()->flush();
        // session('_previous', 'key');
        // var_dump($value);
        return view('home', compact('best'));
    }
}
