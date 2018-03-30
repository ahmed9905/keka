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
	$tableAllSource = \Master\Conectbd\inputAllTableSourceLimit($position_n,$limit_n);// таблица наполнения


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
		
		$tableSource[$i] = $tableAllSource[$i]['source_img_once'];
	}
	if(isset($tableAllSource))
	{
		$countTableSource = \Master\Conectbd\inputCountAllTableSource();
		$kol_page= $countTableSource/$limit_n; //колисчество страниц
	}
