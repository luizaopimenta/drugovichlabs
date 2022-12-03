<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use Illuminate\Support\Facades\Hash;
class ManagerController extends Controller
{

    public function index(){
        return Manager::all();
    }

    public function store(Request $request, Manager $manager)
    {
        $managerData = $request->only('name', 'email', 'password', 'level');
        $managerData['password'] = bcrypt($managerData['password']);
        if(!$manager = $manager->create($managerData)){
            abort(401, "Error to create user");
        }

        return response()->json(['data' => ['manager' => $manager]]);

    }

    public function login(Request $request){

        $manager = Manager::where('email', $request->email)->first();
        if (! $manager || ! Hash::check($request->password, $manager->password)) {
            abort(401, "Invalid Email/Login");
        }

        if($manager->level === 1){
            $token = $manager->createToken("auth_token", ["check"])->plainTextToken;
        }

        if($manager->level === 2){
            $token = $manager->createToken("auth_token", ["edit"])->plainTextToken;
        }



        return $token;

    }



    public function show($id)
    {
        return Manager::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $client = Manager::findOrFail($id);
        $client->update($request->all());
    }

    public function destroy($id)
    {
        $client = Manager::findOrFail($id);
        $client->delete();
    }



}
