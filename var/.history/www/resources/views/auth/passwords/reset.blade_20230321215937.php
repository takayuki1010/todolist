@extends('layout')

@section('layout')

<section>
    <div class="continer">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">
                        パスワード再設定
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="password">
                                    新しいパスワード
                                </label>
                                <input type="password"  class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="password-confirm">
                                    新しいパスワード（確認用）
                                </label>
                                <input type="password" class="form-control" id="password-confirm" name="password-cnfirmation">
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection
