<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <link rel="stylesheet"  href="../../../css/style.css" >
</head>
<body>


<!-- @extends('layout')

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <style>
        @import url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css');

        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            background-color: #f4f7f8;
        }

        header {
            display: flex;
            justify-content: space-between;
            height: 5rem;
            align-items: center;
            background-color: #333333;
            padding: 0 3rem;
            margin: 0 0 3rem 0;
        }

        header a, .my-navbar-item {
            color: #8c8c8c;
            text-decoration: none;
            font-size: 20px;
        }

        header a:hover ,
        a.my-navbar-item:hover {
            color: #ffffff;
        }

        .table td:nth-child(2),
        .table td:nth-child(3),
        .table td:nth-child(4) {
            white-space: nowrap;
            width: 1px;
        }

        section {
            margin: 2rem 3rem;
        }

        .form-control[disabled],
        .form-control[readonly] {
            background-color: #fff;
}
    </style>
    <link rel="stylesheet"  href="../../../css/style.css" >
@endsection

@section('layout') -->

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
                        @endif
                        <form action="{{ route('tasks.edit', ['id' => $task->folder_id, 'task_id' => $task->id]) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">
                                    タイトル
                                </label>
                                <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $task->title) }}">
                            </div>
                            <div class="form-group">
                                <label for="status">
                                    状態
                                </label>
                                <select name="status" id="status" class="form-group">
                                    @foreach(App\Models\Task::STATUS as $key => $val)
                                        <option value="{{ $key }} {{ $key == old('status', $task->status) ? 'selected' : '' }}">
                                            {{ $val['label'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="due_date">
                                    期限
                                </label>
                                <input type="text" name="due_date" id="due_date" value="{{ old('due_date') ?? $task->formatted_due_date }}">
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary" type="submit">
                                    送信
                                </button>
                            </div>
                        </form>
                </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- @endsection

@section('scripts') -->

    <script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>
    <script>
        flatpickr(document.getElementById('due_date'), {
            locale: 'ja',
            dateFormat: "Y/m/d",
            minDate: new Date()
        });
    </script>

<!-- @endsection -->
</body>
</html>
