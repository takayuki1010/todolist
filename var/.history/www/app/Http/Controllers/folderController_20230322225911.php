<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Folder;
use App\Models\Task;

class folderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Folder $folder)
    {
        // フォルダ取得(ユーザーのもののみ)
        $folders = Auth::user()->folders()->get();

        // 選択されたidのフォルダを取得
        $folders_id = $folder->tasks()->get();

        return view('folder', [
            'folders' => $folders,
            'id' => $folder->id,
            'tasks_id' => $folders_id
        ]);
    }
}
