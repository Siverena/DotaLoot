<?php
session_start();
//$login = 'admin';
//$password = 'qwerty';
$m = $_GET['auth'] ?? false;
$l = $_GET['logout'] ?? false;

if(isset($_GET['auth']) && $m == true) {
    setcookie('login', 'auth', time()+3600);
//    setcookie('password', $password, time()+3600);        
    $_SESSION['auth'] = true;
    $url = $_SESSION['redirecturl'] ?? "index.php";
    unset($_SESSION['redirecturl']);
    unset($_GET['auth']);
    header("location: $url");
    exit();
}

function isAuth(){

	$auth = $_SESSION['auth'] ?? false;

	if(!$auth){
		if(isset($_COOKIE['login']) && $_COOKIE['login'] == 'auth'){
			$_SESSION['auth'] = true;
			$auth = true;

		}	
	}
	return $auth;
}

if(isset($_GET['logout']) && $l == true) {
    setcookie('login', '', time()-3600*12);
    $_SESSION['auth'] = false;
    $url = $_SESSION['redirecturl'] ?? "index.php";
    unset($_GET['auth']);
    unset($_GET['logout']);    
    unset($_SESSION['redirecturl']);    
    header("location: $url");
    exit();
}

?>
