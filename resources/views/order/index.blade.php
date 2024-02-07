@extends('layouts.app')

@section('content')
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">受注管理一覧</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ホーム</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">売り上げ</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <section>
        <header class="border-bottom pb-2 mb-3 d-flex align-items-center">
            <h1 class="fs-5 m-0">注文管理一覧表</h1>
            <a href="{{ route('order.create')}}" class="btn btn-primary btn-sm ms-auto">
            <i class="bi bi-file-earmark-plus-fill"></i>
            新規追加
            </a>
        </header>

        <p>注文情報一覧です</p>
        <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">商品名</th>
                <th scope="col">価格</th>
                <th scope="col">分類</th>
                <th scope="col">編集</th>
                <th scope="col">削除</th>
                <th scope="col">編集者</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $val)
            <tr>
                <th scope="row">{{ $val->id }}</th>
                <td>{{ $val->name }}</td>
                <td>{{ $val->price }}</td>
                <td>{{ $val->tag_id }}</td>
                <td><a href="" class="btn btn-primary btn-sm">編集</a></td>
                <td>
                    <form action="{{ route('order.destroy', $val)}}" method="POST">
                    @csrf
                    @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">削除</button>
                    </form>
                </td>
                <td>xx</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </section>
</div>
@endsection
