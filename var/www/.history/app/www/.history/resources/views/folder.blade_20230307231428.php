@extends('layout')

@section('layout')
    <!-- フォルダ表示 -->
    <section>
        <div class="boxs">
            <div class="folder-box">
                <nav class="my-navbar">
                    <div class="my-navbar-brand">
                        <p>フォルダ</p>
                    </div>
                    <div class="folder-post">
                        <a href="#">フォルダを追加する</a>
                    </div>
                    <div class="folder-lists">
                        @foreach($folders as $folder)
                            <a href="{{ route('list.index', [ 'id' => $folder->id ]) }}">
                                {{ $folder->title }}
                            </a>
                        @endforeach
                    </div>
                </nav>
            </div>

        <!-- タスク表示 -->
            <div class="task-box">
                <nav>
                    <div class="task-nav">
                        <p>タスク</p>
                    </div>
                    <div class="task-post">
                        <a href="#">フォルダを追加する</a>
                    </div>
                    <div>
                        <a href="#"></a>
                    </div>
                </nav>
            </div>
        </div>
    </section>
@endsection
