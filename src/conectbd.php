<?php
namespace Master\Conectbd;

define('DB_HOST', 'localhost');
define('DB_USER', 'u0398_ralt');
define('DB_PASSWORD','fVt6@4t4');
define('DB_NAME','u0398885_mh');

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
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}
		return $row;
	}
	function inputTableLimit($table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table LIMIT 0,10");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}
		return $row;
	}
	function inputTableLimitSort($table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		if ($table == 'master_percon_command') {
			$res = mysqli_query($mysqli,"SELECT *  FROM $table ORDER BY `id_percon_command` DESC LIMIT 0,10 ");
		}elseif($table == 'master_code_command'){
			$res = mysqli_query($mysqli,"SELECT *  FROM $table ORDER BY `id_code_command` DESC LIMIT 0,10 ");
		}
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}
		return $row;
	}
	function inputTableCode($table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE `id_source` > 0");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}
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
	function inputCodeId($id,$table='master_code'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE id_code = '$id'");
		$row = mysqli_fetch_assoc($res);
		return $row;
	}
	function inputSourceId($id,$table='master_source'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		if($table == 'master_source'){
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE id_source = '$id'");
		}elseif($table == 'master_percon'){
			$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE id_percon = '$id'");
		}
		$row = mysqli_fetch_assoc($res);
		return $row;
	}
	function inputAllTableSource($table = 'master_source'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}		
		return $row;
	}
	function inputCountAllTableSource($table = 'master_source'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}		
		return count($row);
	}
	function inputAllTableSourceLimit($position_n=0,$limit_n=8,$table = 'master_source'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table LIMIT $position_n,$limit_n");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}		
		return $row;
	}
	function inputAllTableSourceLimitSort($position_n=0,$limit_n=8,$table = 'master_source'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table ORDER BY `id_source`  LIMIT $position_n,$limit_n");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}		
		return $row;
	}
	function inputTableCodeCommand($id,$table = 'master_code_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table WHERE id_command = '$id'");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}		
		return $row;
	}
	function inputTableCode1($table = 'master_code'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT *  FROM $table ");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}		
		return $row;
	}
	function inputCheckSlom($table='master_slom'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT * FROM $table");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}
		$slom=$res->num_rows;
			return $row[$slom-1]['time'];		
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
	function checkCode($code, $table='master_code'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT * FROM $table WHERE `code` = '$code'");
		if ($res->num_rows == 1 ){
			$row = mysqli_fetch_assoc($res);
			return $row;
		}else{
			return 0;
		}
	}
	function checkSlom($table='master_slom'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT * FROM $table");
		while($result=$res->fetch_assoc()){
			$row[] = $result;
		}
		$slom=$res->num_rows;
			if($row[$slom-1]['flag']){
				return 1;
			}else{
				return 0;
			}
	}
	function checkCodeCommand($id,$id_code, $table='master_code_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT * FROM $table WHERE `id_code` = '$id_code' AND `id_command` = '$id'");
		if ($res->num_rows >= 1 ){
			return 0;
		}else{
			return 1;
		}
	}
	function countCheckCodeCommand($id,$id_source, $table='master_code_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$res = mysqli_query($mysqli,"SELECT * FROM $table WHERE `id_source` = '$id_source' AND `id_command` = '$id'");
			$count = $res->num_rows;
		$res = mysqli_query($mysqli,"UPDATE $table SET `stage` = '$count' WHERE `id_source`= '$id_source'");
			return 	$count;
	}
    
    /* Основные функции ввода */ 

	function insertUser($login, $password, $name , $table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		mysqli_query($mysqli,"INSERT INTO $table (`id`, `Login`, `Password`, `Hash`, `ip`, `Name`) VALUES (NULL, '$login', '$password', '', '0', '$name')");	

	}
	function insertSlom ($time, $table='master_slom'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		mysqli_query($mysqli,"INSERT INTO $table (`id`, `flag`, `time`) VALUES (NULL, 1, '$time')");	

	}
	function insertCodeCommand($id,$code,$source,$point,$date='0', $table='master_code_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		$date1 = date('d.m.y H:i:s',time());
		$date = (string) $date1;
		if($table == 'master_code_command'){
		mysqli_query($mysqli,"INSERT INTO  $table (`id_code_command`, `id_command`, `id_code`,`id_source`,`point`,`datetime`) VALUES (NULL, '$id', '$code','$source','$point','$date')");
		}elseif ($table == 'master_percon_command'){
		mysqli_query($mysqli,"INSERT INTO $table (`id_percon_command`, `id_command`, `id_code`,`id_percon`,`point`,`datetime`) VALUES (NULL, '$id', '$code','$source','$point','$date')");
		}	

	}
	/* Основные функции редактирования */ 
	function updateHashIp($login, $Hash, $ip , $table='master_command'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		mysqli_query($mysqli,"UPDATE $table SET `Hash` = '$Hash', `ip` = '$ip' WHERE $table.`Login` = '$login'");
	}
	/*Основные функции удаления*/
	function DeleteSlom ($table='master_slom'){
		$mysqli = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
		if (mysqli_connect_errno($mysqli)) {
    		echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
		}
		mysqli_query($mysqli,"DELETE FROM `master_slom` WHERE 1");	

	}