@extends('layout')

@section('layout')
<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">
                        ログイン
                    </div>
                    <div class="panel-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $message)
                            <p>{{ $message }}</p>
                            @endforeach
                        </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST"></form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
