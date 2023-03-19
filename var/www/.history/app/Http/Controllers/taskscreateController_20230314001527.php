<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;

class taskscreateController extends Controller
{
    public function showCreateForm(int $id)
    {
        return view('tasks/create', [
            'id' => $id
        ]);
    }

    public function create(int $id, CreateTask $request)
{
    $current_folder = Folder::find($id);

    $task = new Task();
    $task->title = $request->title;
    $task->due_date = $request->due_date;

    $current_folder->tasks()->save($task);

    return redirect()->route('list.index', [
        'id' => $current_folder->id,
    ]);
}
}
