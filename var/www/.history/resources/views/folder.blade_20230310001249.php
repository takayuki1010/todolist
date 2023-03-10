@extends('layout')

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
                            <a href="#" class="btn btn-default btn-block">
                                フォルダを追加する
                            </a>
                        </div>
                        <div class="list-group">
                            @foreach($folders as $folder)
                                <a class="list-group-item" href="{{ route('list.index', [ 'id' => $folder->id ]) }}"
                                class="list-group-item {{ $id === $folder->id ? 'active' : '' }}">
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
                                <a href="#" class="btn btn-default btn-block">
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
                                @foreach($tasks_date as $task)
                                <tr>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->status }}</td>
                                    <td>{{ $task->due_date }}</td>
                                    <td><a href="#">編集</a></td>
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
