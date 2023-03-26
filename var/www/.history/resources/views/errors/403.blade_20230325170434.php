@extends('layout')

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

.navbar {
    margin: 2rem 0 2.5rem 0;
}

.my-navbar {
    align-items: center;
    background: #333;
    display: flex;
    height: 6rem;
    justify-content: space-between;
    padding: 0 2%;
    margin-bottom: 3rem;
}

.my-navbar-brand {
    font-size: 18px;
}

.my-navbar-brand,
.my-navbar-item {
    color: #8c8c8c;
}

.my-navbar-brand:hover,
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

.test p {
    color: red;
}
    </style>
    <!-- <link href="../../../css/style.css" rel="stylesheet"> -->
@endsection

@section('layout')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>お探しのページへのアクセス権限はありません。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
