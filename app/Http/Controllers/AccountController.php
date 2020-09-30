<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    public function index()
    {
        $account = Account::all();
        return response()->json($account);
    }

    public function store(Request $request)
    {
        $account = Account::create($request->all());
        return response()->json($account);
    }

    public function show($id)
    {
        $account = Account::find($id);
        return response()->json($account);
    }

    public function update(Request $request, $id)
    {
        $account = Account::find($id)->update(array('name' => $request->get('name'), 'number_phone' => $request->get('number_phone')));
        return response()->json($account);
    }

    public function destroy($id)
    {
        $account = Account::destroy($id);
        return response()->json($account);
    }
}
