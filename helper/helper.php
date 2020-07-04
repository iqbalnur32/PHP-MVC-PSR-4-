<?php 

/*
	Erros Handler
*/
function errors()
{
	echo "<pre>";
	array_map(function($x) {
		var_dump($x);
	}, func_get_args());
	die();
}

/*
	 Hash Password
*/
function bcrytp($password){
	return password_hash($password, PASSWORD_BCRYPT);
}

/*
	Verify Hash Password
*/
function verify($password, $hash)
{
	return password_verify($password, $hash);
}

/*
	Redirect URL
*/
function redirect($url){
	header('Location: ' . BASEURL . $url);
	exit();
}

/*
	Request POST Data
*/
function request($key)
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}else{
		throw new Exception("Error Processing Request", 1);
	}
}


?>