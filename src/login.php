<?php
namespace Master\login;
require_once "conectbd.php";
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
  			setcookie('id',$user['id'], time()+60*60*24);
  			setcookie('hash',$hash, time()+60*60*24,null,null,null,true);
  			header("Location: check.php"); 
  			exit();
  		}else{
  			$errLogin = "Вы ввели неправильный логин/пароль";
  		}
  	}else{
  		$errLogin = "Не найден пользователь";
  	}

  }
  if(isset($_POST['autExit'])){
    setcookie('id',"",time()-60*60*24*100);
    setcookie('hash',"",time()-60*60*24*100);
    header("Location: index.php"); 
  }
