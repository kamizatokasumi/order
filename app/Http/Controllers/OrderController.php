<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\supplier;
use App\Models\status;
use App\Http\Requests\OrderStoreRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::select([
            'b.id',
            'b.supplier_id',
            'b.product_id',
            'b.status_id',
            'b.user_id',
            'b.volume',
            'b.description',
            'b.created_at',
            'b.updated_at',
            's.supplier_name as supplier',
            'r.product_name as products',
            'c.name as statuses',
        ])
            ->from('orders as b')
            ->join('suppliers as s', function ($join) {
                $join->on('b.supplier_id', '=', 's.id');
            })
            ->join('products as r', function ($join) {
                $join->on('b.product_id', '=', 'r.id');
            })
            ->join('statuses as c', function ($join) {
                $join->on('b.status_id', '=', 'c.id');
            })
            ->orderBy('b.id', 'DESC')
            ->paginate(8);
        return view('order.index', compact('orders'));
    }

    public function create()
    {
        $suppliers = supplier::all();
        $products = product::all();
        $statuses = status::all();
        return view('order.create', compact('suppliers', 'products','statuses'));
    }

    public function store(OrderStoreRequest $request)
    {
        $input = $request->all();
        $input['user_id'] = \Auth::user()->id;
        order::create($input);
        return redirect()->route('order.index');
    }

    public function show($id)
    {
        $detail = order::find($id);
        return view('order.show', compact('detail'));
    }

    public function edit($id)
    {
        $order = order::with(['supplier', 'product', 'status'])->findOrFail($id);
        $suppliers = supplier::all();
        $products = product::all();
        $statuses = status::all();
        return view('order.edit', compact('order', 'suppliers', 'products', 'statuses'));
    }

    public function update(Request $request, order $order)
    {
        $input = $request->all();
        $input['user_id'] = \Auth::user()->id; // ログイン中のユーザーIDを追加
        $order->update($input);
        return redirect()->route('order.index', $order);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        // 注文自体を削除する
        $order->delete();
        return redirect()->route('order.index');
    }
}

/**
 *
 */
