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

	$tableAllSource = \Master\Conectbd\inputAllTableSource();// таблица наполнения

	for($i=0;count($tableAllSource) > $i;$i++)
	{	
		for($k=0;count($tableCommandCode)>=$k;$k++){
			if($tableAllSource[$i]['id_source'] == $tableCommandCode[$k]['id_source']){
				if($tableAllSource[$i]['source_img'] == '0'){
					$tableSourceText[$i] = $tableAllSource[$i]['source'];
				}else{
					$tableSourceImg[$i]=$tableAllSource[$i]['source_img'];
				}
				
			}
		}
		if(isset($tableSourceText[$i]) || isset($tableSourceImg[$i]))
			{
				continue;
			}
		if($tableAllSource[$i]['source_img'] == '0'){
		$tableSourceText[$i] = $tableAllSource[$i]['source_once'];
					//echo "{$i} - source"."<br>";
		}else{
			//echo "{$i} - img"."<br>";
			$tableSourceImg[$i]=$tableAllSource[$i]['source_img_once'];
		}
	}
	//print_r($tableSourceText);
	//print_r($tableSourceImg);
	//print_r($tableAllSource);
	//print_r($tableCommandCode);
	//pri1nt_r($_COOKIE);
?>
<!DOCTYPE>
<html>
<head>
<title>master</title>
</head>
<body>
	<?
	require_once 'input.php';
	print_r($errCode);
	?>
	
		<form method="POST">
		<input name="autExit" type="submit" value="Выйти">
        </form>
    <a href="albom.php">Открыть альбом</a>
	<?for($i=0;count($tableSourceText)>=$i;$i++){?>
	<p><?=$tableSourceText[$i]?></p>
	<?}?>

	<?
	if(isset($tableSourceImg)){
	foreach ($tableSourceImg as $key => $value) {?>
	<img src="<?=$value?>" alt="">
	<?}}?>
</body>
</html>