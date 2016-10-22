<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Image;

class ProfileController extends Controller {

	public function getProfile($username){

		$user=User::where('username', $username)->first();
		if(!$user) {
			abort(404);
		}

		return view('profile.index')
		->with('user', $user);
		/*

		$user=User::where('username', $username)->first();
		if(!$user) {
			abort(404);
		}

		$statuses=$user->statuses()->notReply()->get();
		return view('profile.index')
		->with('user', $user)
		->with('statuses', $statuses)
		->with('authUserIsFriend', Auth::user()->isFriendsWith($user));
		*/
	}

	public function updateAvatar(Request $request){

		if($request->hasFile('avatar')) {
			$avatar=$request->file('avatar');
			$filename=time() . '.' . $avatar->getClientOriginalExtension();

			Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename ) );

			$user=Auth::user();
			$user->avatar=$filename;
			$user->save();

		}

		return view('profile.index')
		->with('user', $user);

	}
}