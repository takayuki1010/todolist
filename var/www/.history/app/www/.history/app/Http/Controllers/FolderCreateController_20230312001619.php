<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\Task;

class FolderCreateController extends Controller
{
    public function create()
    {
        return view('folders/create');
    }
}
