<?php 

use Illuminate\Database\Seeder;

class AdminTableSeeder extends seeder {

	public function run()
	{
		$id = \DB::table('users')->insertGetId(array (
			'first_name'	=> 'Carlos',
			'last_name'		=> 'Herrera',
			'email'			=> 'carlos.ksa21@gmail.com',
			'password'		=> \Hash::make('carlos'),
			'type'			=> 'admin'
		));

		\DB::table('user_profiles')->insert(array(
			'user_id' 	=> '1',
			'bio'		=> $faker->paragraph(rand(2,5)),
			'website'	=> 'carlos.herrrera.com',
			'twitter'	=> 'http://www.twitter.com/carlos.ksa21',
			'birthdate'	=> $faker->dateTimeBetween('-45 years', '-15 years')->format('Y-m-d')
		));
	}

}