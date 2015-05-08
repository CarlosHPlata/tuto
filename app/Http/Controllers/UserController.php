<?php namespace App\Http\Controllers;
use App\User;
use App\UserProfile;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller {

	/*
		pasos para exponer
			Explicar los que vamos a hacer, simular un registro de usuario.
			
			Mostrar el formulario de nuevo usuario

			Explicar que se ha dividido el usuario en dos tablas, la de User y la de UserProfile

			Explicar insercion mediante Fluent mostrando la migration y los seeds, que es un query builder
			Explicar insercion con Eloquent ORM y favorecer este metodo para el entorno de la aplicacion.
			Escojer Eloquent para acercar el nivel conceptual al entorno y la abstraccion del trabajo
			Explicar que es un error elegir Eloquent y ORMS en vez del uso de querys MySql
			Mostrar brevemente que Eloquent y Fluent pueden trabajar juntos
			
			Mostrar los modelos y migrations de User y UserProfile

			Explicar las rutas getNew y postNew

			Programar el guardado de los datos de usuario
			Hasta la linea: 86

			Explicar como funciona
				fillable
				requisitos de campos con nombres iguales

			Programar como se haria un nuevo UserProfile a mano

			Explicar que existe una solucion mejor, usando relaciones

			Mostrar modelo User y la relacion hasOne

			Explicar la conversion camelCase to under_score
			y la convencion user_id

			Mostrar como acceder al parametro profile en la vista editView

			Programar como guardar el userProfile

			Programar todo el updateUser
	*/

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(){
		$users = User::get();
		return view('user.indexview', ['users' => $users]);
	}

	public function getNew(){
		return view('user.newview');
	}

	public function postNew(CreateUserRequest $request){
		
		$params = Request::all();
		$user = new User();
		$user->fill($params);

		$user->save();

		$user->profile()->save(new UserProfile($params));

		return redirect('users/');
	}

	public function getEdit($id){
	    $user = User::findOrFail($id);
	    return view('user.editview', ['user' => $user]);
	}

	public function postEdit(EditUserRequest $request, $id){
		$user = User::findOrFail($id);
		$params = Request::all();

		$user->fill($params);
		$user->save();

		$user->profile->fill($params);
		$user->profile->save();

		return redirect('users/');
	}

}
