<?php
namespace Master\Conectbd;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME','master');


//подключение к бд
	function conectBD(){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
	}

/* Основные функции вывода */ 
	
	//Вывод определенной таблицы
	function inputTable($table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table");
		$row = mysqli_fetch_assoc($res);
		return $row;
	}
	function inputUserLogin($login,$table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE login = '$login'");
		$row = mysqli_fetch_assoc($res);
		return $row;
	}
	function inputUserId($id,$table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE id = '$id'");
		$row = mysqli_fetch_assoc($res);
		return $row;
	}
	


	/* Основные функции проверки */ 

	//проверка на уникальный логин

	function uniqLogin($login, $table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE Login = '$login'");
		if ($res->num_rows > 0 ){
			return 1;
		}else{
			return 0;
		}
	}
    
    /* Основные функции ввода */ 

	function insertUser($login, $password, $name , $table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		mysqli_query($mysqli,"INSERT INTO $table (`id`, `Login`, `Password`, `Hash`, `ip`, `Name`) VALUES (NULL, '$login', '$password', '', '0', '$name')");	

	}
	/* Основные функции редактирования */ 
	function updateHashIp($login, $Hash, $ip , $table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		mysqli_query($mysqli,"UPDATE $table SET `Hash` = '$Hash', `ip` = '$ip' WHERE $table.`Login` = '$login'");
	}
