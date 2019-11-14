<?php

session_start();
$_SESSION = array();
unset($_SESSION['id']);

if (ini_get("session.use_cookies")){
	$params = session_get_cookie_params();
	setcookies(session_name(), "", time() = 42000,
		$params["path"], $params["domains"],
		$params["secure"], $params["httponly"]
	);
}

session_destroy();
header("Location: index.php");

?>