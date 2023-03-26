<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
use App\Models\Task;
use App\Models\Folder;
use App\Http\Requests\EditTask;
use Illuminate\Support\Facades\Auth;

class taskscreateController extends Controller
{
    public function showCreateForm($id)
    {
        return view('tasks/create', [
            'folder_id' => $folder->id
        ]);
    }

    public function create(Folder $folder, CreateTask $request)
    {
        $create_folder = Folder::find($id);

        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;

        $folder->tasks()->save($task);

        return redirect()->route('list.index', [
            'id' => $folder->id,
        ]);
    }

    // 編集するタスクデータを取得し、そのデータを編集画面へ
    public function showEditForm(Folder $folder, $task_id)
    {
        $task = Task::find($task_id);

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function edit(Folder $folder, $task_id, EditTask $request)
    {
        // タスクの中のtask_idの情報取得
        $task = Task::find($task_id);

        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;

        $task->save();

        return  redirect()->route('list.index', [
            'id' => $task->folder_id
        ]);
    }

}
