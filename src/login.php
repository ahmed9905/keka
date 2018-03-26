<?php
namespace Master\login;
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
  if(isset($_POST['aut'])) {
  	$login = $_POST['login'];
  	$password = $_POST['password'];
  	if(\Master\ConectBD\uniqLogin($login))
  	{
  		$user = \Master\Conectbd\inputUserLogin($login);
  		if($user['Password'] === md5(md5($_POST['password'])))
  		{
  			$hash = md5(generateCode(10));
  			$ipuser = (string)$_SERVER['REMOTE_ADDR'];
  			\Master\Conectbd\updateHashIp($login,$hash,$ipuser);
  			setcookie('id',$user['id'], time()+60*60*24*30);
  			setcookie('hash',$hash, time()+60*60*24*30,null,null,null,true);
  			header("Location: src/check.php"); 
  			exit();
  		}else{
  			echo "Вы ввели неправильный логин/пароль";
  		}
  	}else{
  		echo "Не найден пользователь";
  	}

  }
require_once "src\conectbd.php";
?>
<form method="POST">
Логин <input name="login" type="text" required><br>
Пароль <input name="password" type="password" required><br>
<input name="aut" type="submit" value="Войти">
</form>