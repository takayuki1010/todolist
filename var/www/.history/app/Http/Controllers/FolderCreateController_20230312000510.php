<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderCreateController extends Controller
{
    public function create()
    {
        return view('folders/create');
    }
}
