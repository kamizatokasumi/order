<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Requests\ProductStoreRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = product::orderBy('id', 'desc')->paginate(8);
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductStoreRequest $request)
    {
        $input = $request->all();
        product::create($input);
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = product::findOrFail($id); // 変数名を単数形に修正
        return view('product.edit', compact('product'));
    }

    public function update(ProductStoreRequest $request, $id)
    {
        $product = product::findOrFail($id); // 変数名を単数形に修正
        $input = $request->all();
        $product->update($input); // 変数名を単数形に修正
        return redirect()->route('product.index')->with('success', '商品情報を更新しました。'); // メッセージ内容を修正
    }
}
