<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\supplier;
use App\Http\Requests\SupplierStoreRequest;

class SupplierController extends Controller
{
    public function index()
    {
        $clients = supplier::orderBy('id', 'desc')->paginate(8);
        return view('client.index', compact('clients'));
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(SupplierStoreRequest $request)
    {
        $input = $request->all();
        supplier::create($input);
        return redirect()->route('client.index');
    }

    public function edit($id)
    {
        $client = supplier::findOrFail($id);
        return view('client.edit', compact('client'));
    }

    public function update(SupplierStoreRequest $request, $id)
    {
        $client = supplier::findOrFail($id);
        $input = $request->all();
        $client->update($input);
        return redirect()->route('client.index')->with('success', '取引先情報を更新しました。');
    }
}
