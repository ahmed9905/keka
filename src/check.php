<?php
	namespace Master\Check;
	require_once 'conectbd.php';

	if(isset($_COOKIE['id']) && isset($_COOKIE['hash']))
	{	
		$id_user = $_COOKIE['id'];
		$hash_user = $_COOKIE['hash'];
		$user = \Master\Conectbd\inputUserId($id_user);
		
		if($user['Hash'] != $hash_user || $user['id'] != $id_user)
		{
			setcookie('id',"",time()-30*30*30*12,"/");
			setcookie('hash',"",time()-30*30*30*12,"/");
			echo "что-то пошло не так";
		}else{
			header("Location: /index.php"); 
		}
	}else{
		echo "куки не работают";
	}
	