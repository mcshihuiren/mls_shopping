<?php 
	
	$factory->define(App\Admin::class, function (Faker\Generator $faker) {
	    static $password;

	    return [
	        'name' => $faker->firstName,
	        'password' => $password ?: $password = bcrypt('secret'),
	        'remember_token' => str_random(10),
	    ];
	});
?>