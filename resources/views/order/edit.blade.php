@extends('order.app')

@section('content')
<header class="bg-primary text-center text-light fixed-top p-3"></header>

<main>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">編集</div>
                        <div class="card-body">
                            <div style="text-align:right;">
                                <form action="{{ route('order.update', $order) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <select name="supplier_id" class="form-select">
                                        @foreach( $suppliers as $supplier)
                                        <option value="{{ $supplier->id }}" {{ $supplier->id == $order->supplier_id ? 'selected' : '' }}>{{ $supplier->supplier_name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <select name="product_id" class="form-select">
                                        @foreach( $products as $product)
                                        <option value="{{ $product->id }}" {{ $product->id == $order->product_id ? 'selected' : '' }}>{{ $product->product_name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <select name="status_id" class="form-select">
                                        @foreach( $statuses as $status)
                                        <option value="{{ $status->id }}" {{ $status->id == $order->status_id ? 'selected' : '' }}>{{ $status->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="volume" value="{{ $order->volume }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 mb-2 mt-2">
                                    <div class="form-group">
                                        <input type="text" name="description" value="{{ $order->description }}" class="form-control"/>
                                    </div>
                                </div>

                                <div class="col-12 mb-2 mt-2">
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



