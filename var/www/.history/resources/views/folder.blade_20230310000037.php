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
                                <a href="#">タスクを追加する</a>
                            </div>
                        </div>
                        <div>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
