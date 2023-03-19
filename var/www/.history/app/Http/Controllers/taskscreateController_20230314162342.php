<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;

class taskscreateController extends Controller
{
    public function showCreateForm($id)
    {
        return view('tasks/create', [
            'id' => $id
        ]);
    }

    public function create($id, CreateTask $request)
{
    $create_folder = Folder::find($id);

    $task = new Task();
    $task->title = $request->title;
    $task->due_date = $request->due_date;

    $create_folder->tasks()->save($task);

    return redirect()->route('list.index', [
        'id' => $create_folder->id,
    ]);
}
}
