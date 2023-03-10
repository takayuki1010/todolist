@extends('layout')

@section('layout')
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
                    @foreach($data as $folder)
                        <!-- <a href="{{ route('folder.index', [ 'id' = $folder->id ] }}"> -->
                            {{ $folder->title }}
                        </a>
                </div>
            </nav>
        </div>
        <div class="task-box">

        </div>
    </div>
</section>
@endsection
