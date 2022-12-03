<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{

    public function index()
    {
        return Group::all();
    }

    public function store(Request $request)
    {
        Group::create($request->all());
    }

    public function show($id)
    {
        return Group::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->update($request->all());
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
    }
}
