<?php namespace App\Http\Controllers;
use App\User;
use App\UserProfile;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(){
		$users = User::get();
		return view('user.indexview', ['users' => $users]);
	}

	//insercion usuario

	public function getNew(){
		return view('user.newview');
	}

	public function postNew(){
		return redirect('users/');
	}

	//edicion usuario

	public function getEdit($id){
	    $user = User::findOrFail($id);
	    return view('user.editview', ['user' => $user]);
	}

	public function postEdit($id){
		return redirect('users/');
	}

}
