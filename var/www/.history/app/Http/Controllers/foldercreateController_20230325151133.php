<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Http\Requests\CreateFolder;
use Illuminate\Support\Facades\Auth;

class foldercreateController extends Controller
{
    public function showCreateForm()
    {
        return view('folders/create');
    }

    public function create(CreateFolder $request)
    {
        $folder = new Folder();

        $folder->title = $request->title;

        Auth::user()->folders()->save($folder);

        return redirect()->route('tasks.index', [
            'folder' => $folder->id,
        ]);
    }
}
