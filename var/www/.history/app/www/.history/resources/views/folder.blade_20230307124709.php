<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/style.css" rel="stylesheet">
    <title>todo layout</title>
</head>
<body>
    <header>
        <h2><a href="#">ToDo App</a></h2>
    </header>

    <!-- フォルダ表示 -->
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

</body>

</html>
