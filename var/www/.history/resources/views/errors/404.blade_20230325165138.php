@extends('layout')

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

@section('layout')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>お探しのページは見つかりませんでした。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
