<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('styles')

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="../../css/style.css" rel="stylesheet">
    <title>todo layout</title>
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a class="my-navbar-brand" href="#">ToDo App</a>
            <div class="my-navbar-control">
                @if(Auth::check())
                    <span class="my-navbar-item">
                        ようこそ、{{ Auth::user()->name }}さん
                    </span>
                    ｜
                    <a href="" id="logout" class="my-navbar-item">ログアウト</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="my-navbar-item">
                            ログイン
                        </a>
                        ｜
                    <a href="{{ route('register') }}" class="my-navbar-item">
                        会員登録
                    </a>
                @endif
            </div>
        </nav>
    </header>

    @yield('layout')

    @if(Auth::check())
        <script>
            document.getElementById('logout').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
            });
        </script>
    @endif
    @yield('scripts')
</body>
</html>
