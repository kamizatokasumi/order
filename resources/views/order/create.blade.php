@extends('order.app')

@section('content')
<header class="bg-primary text-center text-light fixed-top p-3"></header>

<main>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">新規登録</div>
                        <div class="card-body">
                            <div style="text-align:right;">
                                <form action="{{ route('order.store')}}" method="POST">
                                @csrf
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <select name="supplier_id" class="form-select">
                                        <option>取引先を選択してください</option>
                                        @foreach( $suppliers as $supplier)
                                        <option value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                        @endforeach
                                        </select>
                                        @error('supplier_id')
                                            <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <select name="product_id" class="form-select">
                                        <option>商品名を選択してください</option>
                                        @foreach( $products as $product)
                                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                                        @endforeach
                                        </select>
                                        @error('product_id')
                                            <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <select name="status_id" class="form-select">
                                        <option>状態を選択してください</option>
                                        @foreach( $statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('status_id')
                                            <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="volume" class="form-control" placeholder="数量">
                                        @error('volume')
                                        <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="description" class="form-control" placeholder="説明">
                                        @error('description')
                                            <div style="color: red; float: left;">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2 pt-2">
                                    <button type="submit" class="btn btn-primary w-100">登録</button>
                                </div>
                                </form>
                                <a href="{{ route('order.index')}} " class="btn btn-secondary mt-5 ">一覧へ戻る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

