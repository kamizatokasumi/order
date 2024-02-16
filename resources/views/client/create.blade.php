@extends('order.app')

@section('content')
<header class="bg-primary text-center text-light fixed-top p-3"></header>
<main>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">取引先新規登録</div>
                        <div class="card-body">
                            <div style="text-align:right;">
                                <form action="{{ route('client.store')}}" method="POST">
                                @csrf
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="supplier_name" class="form-control" placeholder="取引先名">
                                        @error('supplier_name')
                                        <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" class="form-control" placeholder="取引先電話番号">
                                        @error('phone_number')
                                        <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="email" class="form-control" placeholder="取引先メールアドレス">
                                        @error('email')
                                        <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2 pt-2">
                                    <button type="submit" class="btn btn-primary w-100">登録</button>
                                </div>
                                </form>
                                <a href="{{ route('client.index')}} " class="btn btn-secondary mt-5 ">一覧へ戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

