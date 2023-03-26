@extends('layout')

@section('layout-list')
<section>
    <div class="boxs">
        <div class="folder-box">
            <nav>
                <div class="folder-nav">
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
                </div>
            </nav>
        </div>
        <div class="task-box">

        </div>
    </div>
</section>
@endsection;
