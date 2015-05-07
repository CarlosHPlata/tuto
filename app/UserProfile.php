<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model {

	protected $fillable = ['bio', 'twitter', 'website', 'birthdate'];

	public function getAgeAttribute(){
		return \Carbon\Carbon::parse($this->birthdate)->age;
	}

}
