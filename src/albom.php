<?php
namespace Master\Albom;
require_once "conectbd.php";
require_once "inputcode.php";

// + img
  $tableAlbomCommand = 'master_percon_command';
  $tableAlbom = 'master_percon';
  $tablePerconCode = \Master\Conectbd\inputTableCodeCommand($_COOKIE['id'],$tableAlbomCommand);
  $tableCommand = \Master\Conectbd\inputUserId($_COOKIE['id']);


  $tableAllPercon = \Master\Conectbd\inputAllTableSource($tableAlbom);// таблица наполнения

  for($i=0;count($tableAllPercon) > $i;$i++)
  { 

    for($k=0;count($tablePerconCode)>$k;$k++){
      if($tableAllPercon[$i]['id_percon'] == $tablePerconCode[$k]['id_percon']){
          $tablePercon[$i]=$tableAllPercon[$i]['img_percon'];
        }
      }
    if(isset($tablePercon[$i]))
      {
        continue;
      }
    $tablePercon[$i] = $tableAllPercon[$i]['img_percon_once'];
    
  }
  //print_r($tablePercon);
  //print_r($tableAllPercon);
  //print_r($tablePerconCode);
  //print_r($tableCommandCode);
  //pri1nt_r($_COOKIE);
  //print_r($_SERVER);

//print_r($tableSource);
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
  <?
  if(isset($tablePercon)){
  foreach ($tablePercon as $key => $value) {?>
  <div class="col-sm-6  polar pravo cvet">
  <img src="<?=$value?>" alt="">
</div>
  <?}}?>
</div>
</div>
</body>
</html>