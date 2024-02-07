@extends('layouts.app')

@section('content')
<header class="bg-primary text-center text-light fixed-top p-3"></header>

<main>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card ">
                    <div class="card-header">新規登録</div>
                    <div class="card-body">
                        <div style="text-align:right;">
                            <form action="{{ route('order.store')}}" method="POST">
                                @csrf
                                    <div class="row">
                                    <div class="col-12 mb-2 mt-2">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="商品名">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2 mt-2">
                                        <div class="form-group">
                                            <input type="text" name="kakaku" class="form-control" placeholder="価格">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2 mt-2">
                                        <div class="form-group">
                                            <select name="tags" class="form-select">
                                                <option>分類を選択してください</option>
                                                    <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2 mt-2">
                                        <div class="form-group">
                                        <textarea class="form-control" style="height:100px" name="shosai" placeholder="詳細"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2 mt-2">
                                            <button type="submit" class="btn btn-primary w-100">登録</button>
                                    </div>
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

