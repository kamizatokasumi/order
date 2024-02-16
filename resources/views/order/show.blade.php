@extends('order.app')

@section('content')
<header class="bg-primary text-center text-light fixed-top p-3"></header>

<main>
    <div class="container-fluid mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div class="card">
                <div class="card-header">詳細</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>詳細</th>
                                <td>{{ $detail->description }}</td>
                            </tr>
                            <tr>
                                <th>作成日</th>
                                <td>{{ $detail->created_at->format('Y年m月d日') }}</td>
                            </tr>
                            <tr>
                                <th>更新日</th>
                                <td>{{ $detail->updated_at->format('Y年m月d日') }}</td>
                            </tr>
                        </table>
                            <div style="text-align: right;">
                                <a href="{{ route('order.index')}} " class="btn btn-secondary">一覧へ戻る</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

