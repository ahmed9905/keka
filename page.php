<?php
namespace Master\Page;
require_once "conectbd.php";
$limit_n=8;

	if(isset($_GET['page']) && $_GET['page']<3)
	{
		$page_n = $_GET['page'];
		$position_n = $limit_n*$page_n; 
	}
	else
	{
		$position_n=0;
		$page_n = 0;
	}

	$tableCommandCode = \Master\Conectbd\inputTableCodeCommand($_COOKIE['id']);
	$tableCommand = \Master\Conectbd\inputUserId($_COOKIE['id']);
	$tableAllSource = \Master\Conectbd\inputAllTableSourceLimitSort($position_n,$limit_n);// таблица наполнения

	//print_r($tableCommandCode);
	//print_r($tableAllSource);

	for($i=0;count($tableAllSource) > $i;$i++)
	{	
		
		switch (\Master\Conectbd\countCheckCodeCommand($tableCommand['id'],$tableAllSource[$i]['id_source'])) {
			case '1':
				$tableSource[$i] = $tableAllSource[$i]['source_img_1'];
				break;
			case '2':
				$tableSource[$i] = $tableAllSource[$i]['source_img_2'];
				break;
			case '3':
				$tableSource[$i] = $tableAllSource[$i]['source_img'];
				break;	
			
			default:
				$tableSource[$i] = $tableAllSource[$i]['source_img_once'];
				break;
		}
	}
	if(isset($tableAllSource))
	{
		$countTableSource = \Master\Conectbd\inputCountAllTableSource();
		$kol_page= $countTableSource/$limit_n; //колисчество страниц
	}
