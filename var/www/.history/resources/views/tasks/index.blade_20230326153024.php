@extends('layout')

@section('styles')

<link href="../../css/style.css" rel="stylesheet">

@endsection

@section('layout')
    <!-- フォルダ表示 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col col-md-4">
                    <nav class="panel panel-default">
                        <div class="panel-heading">
                            フォルダ
                        </div>
                        <div class="panel-body">
                            <a href="{{ route('folders.create') }}" class="btn btn-default btn-block">
                                フォルダを追加する
                            </a>
                        </div>
                        <div class="list-group">
                            @foreach($folders as $folder)
                            {{ dd($tasks->folder_id) }}
                                <a class="list-group-item" href="{{ route('tasks.index', [ 'folder' => $folder->id ]) }}"
                                class="list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}">
                                    {{ $folder->title }}
                                </a>
                            @endforeach
                        </div>
                    </nav>
                </div>

        <!-- タスク表示 -->
                <div class="column col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            タスク
                        </div>
                        <div class="panel-body">
                            <div class="text-right">
                                <a href="{{ route('tasks.create', [ 'folder' => $current_folder_id ]) }}" class="btn btn-default btn-block">
                                    タスクを追加する
                                </a>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>タイトル</th>
                                    <th>状態</th>
                                    <th>期限</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($tasks as $task)
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>
                                        <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
                                    </td>
                                    <td>{{ $task->formatted_due_date }}</td>
                                    <td><a href="{{ route('tasks.edit', ['folder' => $task->folder_id, 'task' => $task->id]) }}" class="">編集</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
