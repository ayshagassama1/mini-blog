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

        // set session
        session(['user'=> $user]);
        return redirect('/');
    }

    //login
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $rep = "";
        // check if user exists
        if(!$user){
            $rep = "user does not exist";
            return view('login', ['rep'=>$rep]);
        }

        // check if password is correct
        if(!Hash::check($request->password, $user->password)){
            $rep = "incorrect password";
            return view('login', ['rep'=>$rep]);
        }

        // set session
        session(['user'=> $user]);
        return redirect('/');
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
