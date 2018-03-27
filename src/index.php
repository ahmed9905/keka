<?php
namespace Master;
session_start();
require_once "conectbd.php";
require_once 'login.php';
//require_once 'src\register.php';
//require_once 'src\inputcode.php';
	if(isset($_COOKIE['id'])){
  		header("Location: main.php"); 
	}

?>
<!DOCTYPE>
<html>
<head>
<title>master</title>
</head>
<body>
	<form method="POST">
	Логин <input name="login" type="text" required><br>
	Пароль <input name="password" type="password" required><br>
	<input name="aut" type="submit" value="Войти">
    </form>
	<?
	echo $errLogin;
  	?>
</body>
</html>

