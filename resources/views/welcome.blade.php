<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Company</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="http://localhost:8888/order">受注管理一覧</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('order.index') }}">ホーム</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('client.index') }}">取引先一覧</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('product.index') }}">商品一覧</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen
                    bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900
                    selection:bg-red-500 selection:text-white">
        </div>
        <div class="container mt-5">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-6 fs-5 m-0 text-start">注文管理一覧表</div>
                    </div>
                </div>
                <header class="border-bottom pb-2 mb-3 d-flex align-items-center justify-content-end">
                    <a href="{{ route('order.create')}}" class="btn btn-primary btn-sm">
                        <i class="bi bi-file-earmark-plus-fill"></i> 新規追加
                    </a>
                </header>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">取引先</th>
                            <th scope="col">商品名</th>
                            <th scope="col">数量</th>
                            <th scope="col">詳細</th>
                            <th scope="col">編集</th>
                            <th scope="col">削除</th>
                            <th scope="col">編集者</th>
                        </tr>
                    </thead>
                </table>
        </header>
        <footer class="bg-primary text-center text-light fixed-bottom mx-0 bg-black bg-opacity-75">
            (c) company.com
        </footer>
    </body>
</html>
