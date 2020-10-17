<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /*
    public function users(){

        $users=User::paginate(3);
        return view('users-list', compact('users'));
    }

    public function index(Request $request, User $user){
        //$users = User::all();
        $users = $user->getUsersBySearch($request)->get();
        return view('users')->with('users',$users);
    }
    */

    public function index(Request $request, User $user){
        //$users = User::all();
        $users = $user->getUsersBySearch($request)->paginate(3);
        return view('users', compact('users'))->with('users',$users);
    }
}
