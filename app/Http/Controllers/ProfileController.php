<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Post;

use DB;


class ProfileController extends Controller
{

    public function show_profile($id)
    {
        $user = DB::table('users')->find($id);
        $posts= Post::all();

        return view ('content.user_profile',compact('user','posts'));
    }



    public function EditProfile(Request $request,$id)
    {
    	$user=User::find($id);

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->phone_number = $request->phone;
        
    	$user->save();

    	return back();

    }
}
