<?php
namespace Master\Inputcode;
require_once "conectbd.php";
	if(isset($_POST['inputcode']))
	{
		$code = $_POST['code'];
		if(\Master\Conectbd\checkCode($code)){
			$mass_code = \Master\Conectbd\checkCode($code);
			\Master\Conectbd\insertCodeCommand($_COOKIE['id'],$mass_code['id_code'],$mass_code['id_source']);
			header("Location: main.php"); 
		}else{
			$errCode = "Неверный код";
		}
		
	}
