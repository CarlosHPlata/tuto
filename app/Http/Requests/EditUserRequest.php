<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request {

	private $route;

	public function __construct(Route $route){
		$this->route = $route;
	}

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{	
		$id = $this->route->getParameter('one');
		return [
			'email' => 'required|email|unique:users,email,' . $id,
			'first_name' => 'required',
			'last_name' => 'required',
			'password' => 'confirmed',
			'type' => 'required|in:user,admin',

			'birthdate' => 'date',
		];
	}

}
