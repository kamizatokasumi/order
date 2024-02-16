@extends('order.app')

@section('content')
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/order') }}">Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('order.index') }}">受注</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('client.index') }}">取引先</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.index') }}">商品</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</header>

<div class="container mt-5">
    <section>
        <div>
            <h1 class="fs-5 m-0 text-start">商品一覧表</h1>
    </div>
        <header class="border-bottom pb-2 mb-3 d-flex align-items-center justify-content-end">
            <a href="{{ route('product.create')}}" class="btn btn-primary btn-sm ms-2">
            <i class="bi bi-bag-plus-fill"></i>
                商品名追加
            </a>
        </header>
        <table class="table table-bordered mx-auto" style="width: 80%">
        <thead>
            <tr>
                <th scope="col" style="width: 20%">商品名</th>
                <th scope="col" style="width: 20%">単価</th>
                <th scope="col" style="width: 10%">編集</th>
            </tr>
        </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->product_name }}</th>
            <td>{{ $product->unit_price }}</td>
            <td><a href="{{ route('product.edit', $product)}}" class="btn btn-primary btn-sm">編集</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{-- ページネーションリンクの表示 --}}
    {{ $products->links('pagination::bootstrap-4')}}
</section>
</div>
@endsection
