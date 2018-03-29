<?php
namespace Master\Inputcode;
require_once "conectbd.php";
	$page = $_SERVER['REQUEST_URI'];
	$errCode = "Введите код";
	if(isset($_POST['inputcode']))
	{
		$code = $_POST['code'];
		if(\Master\Conectbd\checkCode($code)){
			$mass_code = \Master\Conectbd\checkCode($code);
			if($mass_code['id_person'] > '0'){
				$table = 'master_percon_command';
				$id_source = $mass_code['id_person'];
				\Master\Conectbd\insertCodeCommand($_COOKIE['id'],$mass_code['id_code'],$id_source,$table);
			}elseif($mass_code['id_source'] > '0'){
				$id_source = $mass_code['id_source'];
				\Master\Conectbd\insertCodeCommand($_COOKIE['id'],$mass_code['id_code'],$id_source);
			}
			header("Location: {$page}"); 
		}else{
			$errCode = "Неверный код";
		}
		
	}
