<?php
namespace Master\Main;
require_once "conectbd.php";
require_once 'login.php';
//require_once 'register.php';
require_once 'inputcode.php';
	if(!isset($_COOKIE['id'])){
  		header("Location: index.php"); 
	}

/*
  $code123=\Master\Conectbd\inputTableCode1();
  foreach ($code123 as $key => $value) {
      if($value['id_source']>0){
      echo "{$key}.Код = {$value['code']} pint = {$value['point']}<br> ";
    }else{
      echo "{$key}.Код персов = {$value['code']} <br> ";
    }
  }
  */
	// текст + img
	require_once 'page.php';
	//print_r($tableSource);
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

<?require_once 'okno.php';?>


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
        <img src="<?=$tableSource['0']?>" alt="">
      </div>


      <div class="col-6 cvet buma">
        <img src="<?=$tableSource['1']?>" alt="">
      </div>

       <div class="col-6  polar pravo cvet">
        <img src="<?=$tableSource['2']?>" alt="">
      </div>


      <div class="col-6 cvet buma">
        <img src="<?=$tableSource['3']?>" alt="">
      </div>
       <div class="col-6  polar pravo cvet">
        <img src="<?=$tableSource['4']?>" alt="">
      </div>


      <div class="col-6 cvet buma">
        <img src="<?=$tableSource['5']?>" alt="">
      </div>
       <div class="col-6  polar pravo cvet">
        <img src="<?=$tableSource['6']?>" alt="">
      </div>


      <div class="col-6 cvet buma">
        <img src="<?=$tableSource['7']?>" alt="">
      </div>

    </div>
    
    <div class="civ">-
    <?for($i_page=0;$i_page<$kol_page;$i_page++):?>
      <?if($i_page==$page_n):?>
        <strong>Стр.
      <?endif?>
          <a href="main.php?page=<?=$i_page?>"><?=$i_page+1?></a>
      <?if($i_page==$page_n):?>
        </strong>
      <?endif?>
    <?endfor;?>-
  </div>
    </div>
</body>
</html>