<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;


use Illuminate\Http\Request;

class CreateAccontController extends Controller
{
    public function createView(){
        return view('createAccont');
    }

    public function readView() {
        $users = User::all();
        return view('showTable', compact('users'));
    }

    public function addDatabase(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->userName = $request->userName;
        $user->password = $request->password;
        $user->save();
    }

    public function updateView() {
        return view('updateUser');
    }
    public function update(Request $request)
    {
        $id = $request->input('id');
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->save();
        return ('اپدیت شد برو به صفحه read ببین ');
    }

    public function deleteView() {
        return view('deleteUser');
    }
    
    public function deleteObj(Request $request)
    {
        $id = $request->input('id');
        User::find($id)->delete();
        return ('پاک شد');
    }

}