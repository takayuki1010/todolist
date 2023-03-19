@extends('layout')

@section('layout')

<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">
                        まずはフォルダを作成しましょう
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <a href="{{ route('folder.create') }}" class="btn btn-prmary">
                                フォルダ作成ページへ
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection
