<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //store
    public function store(Request $request)
    {
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);

        $user->save();
    }

    //show
    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    //delete
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
