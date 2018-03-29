<?php
namespace Master\Main;
session_start();
require_once "conectbd.php";
require_once 'login.php';
//require_once 'register.php';
require_once 'inputcode.php';
	if(!isset($_COOKIE['id'])){
  		header("Location: index.php"); 
	}

	// текст + img
	$tableCommandCode = \Master\Conectbd\inputTableCodeCommand($_COOKIE['id']);
	$tableCommand = \Master\Conectbd\inputUserId($_COOKIE['id']);
	$tableAllSource = \Master\Conectbd\inputAllTableSource();// таблица наполнения
	for($i=0;count($tableAllSource) > $i;$i++)
	{	
		for($k=0;count($tableCommandCode)>=$k;$k++){
			if($tableAllSource[$i]['id_source'] == $tableCommandCode[$k]['id_source']){
					$tableSource[$i] = $tableAllSource[$i]['source_img'];
			}
		}
		if(isset($tableSource[$i]))
			{
				continue;
			}
		
		$tableSourceText[$i] = $tableAllSource[$i]['source_img_once'];
	}
	//print_r($tableSourceText);
	//print_r($tableSourceImg);
	//print_r($tableAllSource);
	//print_r($tableCommandCode);
	//pri1nt_r($_COOKIE);
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
        <link rel="stylesheet" href="/css/style1.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    
  </head>
  <body>
<input type="checkbox" id="nav-toggle" hidden>

    <nav class="nav">

        <label for="nav-toggle" class="nav-toggle" onclick></label>

        <h2 class="logo"> 
            <p>Меню</p> 
        </h2>
        <ul>
            <li><a href="index.php">Альбом</a>
            <li><a href="albom.php">Персонажи</a>
            <li><a href="position.php">Рейтинг</a>
            <li><a href="main.php?autExit=1">Выход из аккаунта</a> 
        </ul>
    </nav> 
	<div class="sidebar">
      <div class="name-team"><?=$tableCommand['Name'];?></div><br>
      <div class="kod">
        <?require_once 'input.php';?>
      </div>
    </div>
<div class="body-main">
      <div class="row">

      <div class="col-6  polar pravo cvet">
        <img src="/img/578330062e97f155d873982f.png" alt="">
      </div>


      <div class="col-6 cvet buma">
        <img src="/img/bumag228.png" alt="">
      </div>

    </div>
    </div>

</body>
</html>