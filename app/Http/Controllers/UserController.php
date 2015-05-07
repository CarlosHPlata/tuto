<?php namespace App\Http\Controllers;
use App\User;
use App\UserProfile;
use Illuminate\Support\Facades\Request;

class UserController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(){
		$users = User::get();
		return view('user.indexview', ['users' => $users]);
	}

	public function getEdit($id){
	    $user = User::findOrFail($id);
	    return view('user.editview', ['user' => $user]);
	}

	public function postEdit($id){
		$user = User::findOrFail($id);
		$params = Request::all();

		$user->fill($params);
		$user->save();

		$user->profile->fill($params);
		$user->profile->save();

		return redirect('users/');
	}

	public function getNew(){
		return view('user.newview');
	}

	public function postNew(){
		$params = Request::all();

		$user = new User();
		$user->fill($params);
		$user->save();

		$profile = new UserProfile();
		$profile->fill($params);
		$user->profile()->save($profile);

		return redirect('users/');
	}
}
