@extends('layout')

@section('layout')

<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">
                        フォルダを追加する
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('folders/create') }}" method="POST">
                            @csrf
                            <label for="title" class=""></label>
                            <input type="text" class="form-control" name="title" id="title">
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection
