<?php
namespace Master\Albom;
require_once "conectbd.php";
require_once "inputcode.php";

// + img
  $tableAlbomCommand = 'master_percon_command';
  $tableAlbom = 'master_percon';
  $tablePerconCode = \Master\Conectbd\inputTableCodeCommand($_COOKIE['id'],$tableAlbomCommand);


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
    <link rel="stylesheet" href="/css/bootstrap.css">
    
  </head>
  <body>
	<?
	require_once 'input.php';
	print_r($errCode);
	?>	

  <?
  if(isset($tablePercon)){
  foreach ($tablePercon as $key => $value) {?>
  <img src="<?=$value?>" alt="">
  <?}}?>

</body>
</html>