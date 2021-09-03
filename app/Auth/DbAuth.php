<?php

namespace App\Auth;

use \App\Config;

class DbAuth{

	public function login($email, $password){
		$user = Config::getDb()->query("SELECT * FROM users 
		WHERE password=? AND email=?", null, [md5($password), $email]);
		return $user;
	}

	public function logged(){
		return isset($_SESSION['auth']);
	}

}