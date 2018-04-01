<?php
namespace Master\Register;

require_once "conectbd.php";
if(isset($_POST['register']))
{
	$err=[];

	if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
	{
		$err[] = "Логин может состоять только из букв английского алфавита и цифр";
	}
	if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }
    if(\Master\ConectBD\uniqLogin($_POST['login']))
    {
    	$err[] = "Пользователь с таким логином уже существует в базе данных";
    }
    if(count($err) != 0)
    {
    	 print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
    else
    {
    	$login = $_POST['login'];
    	$password = md5(md5(trim($_POST['password'])));
    	$name = $_POST['name'];
    	\Master\ConectBD\insertUser($login,$password,$name);
    }
}

