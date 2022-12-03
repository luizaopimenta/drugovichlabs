<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        Client::create($request->all());
    }

    public function show($id)
    {
        return Client::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->update($request->all());
    }

    public function showGroup(Request $request){

        $client = Client::where('idGroup', $request->idGroup)->get();
        return $client;

    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
    }



}
