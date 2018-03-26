<?php
namespace Master;

require_once "src\conectbd.php";
session_start();
?>
<!DOCTYPE>
<html>
<head>
<title>master</title>
</head>
<body>
	<?
	if(!isset($_SESSION['user']))
	{
		require_once 'src\login.php';
	} 
   ?>






</body>

</html>


