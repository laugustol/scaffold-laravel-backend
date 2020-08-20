<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return response()->json($role);
    }

    public function store(Request $request)
    {
        $role = Role::create($request->all());
        return response()->json($role);
    }

    public function show($id)
    {
        $role = Role::find($id);
        return response()->json($role);
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id)->update(array('name' => $request->get('name')));
        return response()->json($role);
    }

    public function destroy($id)
    {
        $role = Role::destroy($id);
        return response()->json($role);
    }
}
