<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $folders = Auth::user()->folders()->get();

        if(is_null($folders))
        {
            return view('home');
        }

        return redirect()->route('list.index', [
            'id' => $folders->id
        ]);
        // return dd($user->id);
    }
}
