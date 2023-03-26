<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $folders = $user->folders()->first();

        if(is_null($folders))
        {
            return view('home');
        }

        return redirect()->route('list.index', [
            'folder' => $folders->id
        ]);
        // return dd($folders->id);
    }
}
