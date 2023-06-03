<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use Auth;
class ProfileController extends Controller
{
    function index(){
        $profile= User::findOrFail(Auth::user()->id);;
        return view('profile.index', ['profile'=>$profile]);
    }

    function edit(){
        $profile= Auth::user();
        return view('profile.edit', ['profile'=>$profile]);
    }

    function update(Request $request){
        $user = User::findOrFail(Auth::user()->id);
        $user->fullname = $request->fullname;
        $user->sex = $request->sex;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        return $this->index();
    }
    
}
