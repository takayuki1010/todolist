<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
use App\Models\Task;
use App\Models\Folder;

class taskscreateController extends Controller
{
    public function showCreateForm($id)
    {
        return view('tasks/create', [
            'folder_id' => $id
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

    // 編集するタスクデータを取得し、そのデータを編集画面へ
    public function showEditForm($id, $task_id)
    {
        $task = Task::find($task_id);

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function edit($id, $task_id, EditTask $request)
    {
        // タスクの中のtask_idの情報取得
        $task = Taks::find($task_id);

        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;

        $task->save();

        return  redirect()->route('list.index', [
            'id' => $task->folder_id
        ]);
    }

}
