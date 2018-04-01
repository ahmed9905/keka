<?php
namespace Master\Inputcode;
require_once "conectbd.php";
require_once "page.php";

	$page = $_SERVER['REQUEST_URI'];
	$errCode = "Введите код";
	if(isset($_POST['inputcode']))
	{
		$code = $_POST['code'];
		if(\Master\Conectbd\checkCode($code)){

			$mass_code = \Master\Conectbd\checkCode($code);
			if(\Master\Conectbd\checkCodeCommand($_COOKIE['id'],$mass_code['id_code']) && \Master\Conectbd\checkCodeCommand($_COOKIE['id'],$mass_code['id_code'],'master_percon_command')){
			if($mass_code['id_person'] > '0'){
				$nameAlbom = 'Персонажей';
				$perehod = 'albom.php';
				$table = 'master_percon_command';
				$id_source = $mass_code['id_person'];
				\Master\Conectbd\insertCodeCommand($_COOKIE['id'],$mass_code['id_code'],$id_source,$mass_code['point'],'0',$table);
			}else{
				
				$id_source = $mass_code['id_source'];
				$nameAlbom = 'в Альбоме';

				$str = ceil($id_source/$limit_n);
				$perehod = 'main.php?page='.($str-1);


				\Master\Conectbd\insertCodeCommand($_COOKIE['id'],$mass_code['id_code'],$id_source,$mass_code['point']);
			}
			$errCode = "Код введен";

			//header("Location: {$page}");
			}else{
				$errCode = "Код уже был введен";
			} 
		}else{
			$errCode = "Неверный код";
		}
		
	}

	if(isset($_POST['perehod'])){
		$pageperehod = '1';
	}


