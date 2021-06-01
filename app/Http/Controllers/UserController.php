<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    public function getUser($user_id){
        return Users::select('users.id', 'users.name')
            ->where('users.id', '=', $user_id)
            ->get();
    }
    public function getUsers($user_id){
        return Users::select('users.id', 'users.name')
            ->get();
    }
    public function createUser($user_id, $user_name, $user_password){
        return Users::create([
            'users_id' => $user_id,
            'users_name' => $user_name,
            'users_password' => $user_password,
            'timestamps' => null
        ]);
    }
    public function alterUser(){
        $user = Users::find($id);
        $user->fill($request->input())->save();
    }
    public function deleteUser($user_id){
        return Users::delete('users.id', 'users.name')
            ->where('users.id', '=', $user_id)
            ->get();
    }

}
