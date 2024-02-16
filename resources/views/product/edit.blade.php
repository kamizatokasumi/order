@extends('order.app')

@section('content')
<header class="bg-primary text-center text-light fixed-top p-3"></header>

<main>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">商品情報編集</div>
                        <div class="card-body">
                            <div style="text-align:right;">
                                <form action="{{ route('product.update', $product->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="product_name" value="{{ $product->product_name }}" class="form-control" placeholder="商品名">
                                        @error('product_name')
                                        <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="unit_price" value="{{ $product->unit_price }}" class="form-control" placeholder="単価">
                                        @error('unit_price')
                                        <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <button type="submit" class="btn btn-primary w-100">更新</button>
                                </div>
                                </form>
                                <a href="{{ route('product.index')}} " class="btn btn-secondary mt-5 ">一覧へ戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
