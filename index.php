<?php
namespace Master;
session_start();
require_once "src\conectbd.php";
require_once 'src\login.php';
require_once 'src\register.php';
?>
<!DOCTYPE>
<html>
<head>
<title>master</title>
</head>
<body>
	<?
	if(!isset($_COOKIE['id']))
	{
	?>
	<form method="POST">
	Логин <input type="text" name="login"><br>
	Имя <input type="text" name="name"><br>
	Пароль <input type="password" name="password"><br>
	<input type="submit" name="register" value = "Зарегистрироваться"><br>
	</form>
	<form method="POST">
	Логин <input name="login" type="text" required><br>
	Пароль <input name="password" type="password" required><br>
	<input name="aut" type="submit" value="Войти">
    </form>
	<?
	echo $errLogin;
	}else { 
	?>
		<form method="POST">
		<input name="autExit" type="submit" value="Выйти">
        </form>
	<?
	}
   ?>
</body>

</html>


