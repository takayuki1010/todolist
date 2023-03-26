<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../../css/style.css" rel="stylesheet">
    <title>todo layout</title>
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="#">ToDo App</a>
        </nav>
    </header>
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
                                <div class="form-group">
                                    <label for="title" class="">フォルダを追加</label>
                                    <input type="text" class="form-control" name="title" id="title">
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary" type="submit">送信</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>
