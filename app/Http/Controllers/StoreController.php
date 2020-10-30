<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    public function index()
    {
        $store = Store::all();
        return response()->json($store);
    }

    public function store(Request $request)
    {
        $store = Store::create($request->all());
        return response()->json($store);
    }

    public function show($id)
    {
        $store = Store::find($id);
        return response()->json($store);
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id)->update(array('name' => $request->get('name')));
        return response()->json($store);
    }

    public function destroy($id)
    {
        $store = Store::destroy($id);
        return response()->json($store);
    }
}
