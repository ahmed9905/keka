<?php
namespace Master;
session_start();

require_once "src\conectbd.php";
?>
<!DOCTYPE>
<html>
<head>
<title>master</title>
</head>
<body>
	<?

	if(!isset($_COOKIE['id']))
	{
		
		require_once 'src\register.php';
		require_once 'src\login.php';

	}else {

		
	}
   ?>
</body>

</html>


