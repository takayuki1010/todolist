@extends('layout')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <link href="../../../css/style.css" rel="stylesheet">
@endsection

@section('layout')

<section>
    <div class="container">
        <div class="row">
            <div class="col col-md-offset-3 col-md-6">
                <nav class="panel panel-default">
                    <div class="panel-heading">
                        タスクを編集する
                    </div>
                    <div class="panel-body">
                        @if($errors->any())
                            <div class="alert alert-denger">
                                @foreach($errors->all() as $message)
                                    <p>{{ $message }}</p>
                            </div>
                                @endforeach
                    </div>
                        @endif
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">
                                    タイトル
                                </label>
                                <select class="form-control" name="title" id="title">
                                    @foreach(\App\Models\Task::STATUS as $key => $val)
                                        <option value="{{ $key }}" {{ $key == old('status', $task->status) ? 'selected' : '' }}>
                                            {{ $val['label'] }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="due_date">
                                        期限
                                    </label>
                                    <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') ?? $task->formatted_due_date }}">
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">送信</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status">
                                    状態
                                </label>
                                <input type="text" class="form-control" name="status" id="status" value="{{ old('status') }}">
                            </div>
                        </form>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
    <script>
        flatpickr(document.getElementById('due_date'), {
            locale: 'ja',
            dateFormat: "Y/m/d",
            minDate: new Date()
        });
    </script>

@endsection
