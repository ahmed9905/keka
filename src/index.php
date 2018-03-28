<?php
namespace Master;
session_start();
require_once "conectbd.php";
require_once 'login.php';
//require_once 'src\register.php';
//require_once 'src\inputcode.php';
	if(isset($_COOKIE['id'])){
  	header("Location: /src/main.php"); 
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    
  </head>
  <body>
	 <form method="POST">
          <div class="intro">
            <div class="intro1">
              <div class="text-main">
                <h1>Мой дневник</h1>
              </div>
              <div class="vvod1">
                <p>Ваш логин</p>
                <input size="25"  name="login" type="text" required">
                <p>Ваш пароль</p>
                <input size="25" name="password" type="password" required">
              </div>
              <? if(isset($errLogin)){?>
              <div class="error">
              	<p><?=$errLogin?></p>
              </div>
              <?}?>
              <div class="butt">
                     <input name ="aut" type="submit" value="Войти">
            </div>
            </div>
          </div>
          </form>
</body>
</html>

