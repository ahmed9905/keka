<?php
namespace Master\Position;
require_once "conectbd.php";
require_once 'inputcode.php';
if(!isset($_COOKIE['id'])){
  		header("Location: index.php"); 
	}
$tableAllCodeCommand = \Master\Conectbd\inputTable('master_code_command');

$tableCommand = \Master\Conectbd\inputTable();
$tableCommandId = \Master\Conectbd\inputUserId($_COOKIE['id']);
$tablePosition = [];
$countCommand = count($tableCommand);
$tableCode = \Master\Conectbd\inputTableCode('master_code');
$countAllPoint =0;

for ($i=0; $i < count($tableCode);$i++) { 
		$countAllPoint += $tableCode[$i]['point'];
	}

for($i=0;$i<$countCommand;$i++)
{
	$countPointCommand=0;
	$countCodeCommand=0;
	$tableCommandCode = \Master\Conectbd\inputTableCodeCommand($tableCommand[$i]['id']);
	for ($k=0; $k < count($tableCommandCode); $k++) { 
		$countPointCommand += $tableCommandCode[$k]['point'];
		$countCodeCommand ++;
	}
	$tablePosition[$i]['id'] = $tableCommand[$i]['id'];
	$tablePosition[$i]['Name'] = $tableCommand[$i]['Name'];
	$tablePosition[$i]['Point'] = $countPointCommand;
	$tablePosition[$i]['Code'] = $countCodeCommand;
}
//print_r(count($tablePosition));
//print_r($tablePosition);
$countTablePosition = count($tablePosition);
for ($i=0; $i < $countTablePosition-1; $i++) { 
	$f=0;
	for ($k=0; $k < $countTablePosition; $k++) { 
		
		if($tablePosition[$k]['Point']<$tablePosition[$k+1]['Point'])
		{
			list($tablePosition[$k],$tablePosition[$k+1]) = array($tablePosition[$k+1],$tablePosition[$k]);
			$f = 1;
		}
	}
	if(!$f)
	{
		break;
	}
}


/*
echo "Количество комманд: {$countCommand} ";
echo "Количество очков: {$countAllPoint} ";
*/
//print_r($tablePosition);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/style1.css">
        <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    
  </head>
  <body>
    <?require_once 'okno.php';?>
<input type="checkbox" id="nav-toggle" hidden>

    <nav class="nav">

        <label for="nav-toggle" class="nav-toggle" onclick></label>

        <h2 class="logo"> 
            <p>Меню</p> 
        </h2>
        <ul>
            <li><a href="index.php">Альбом</a>
            <?if(\Master\Conectbd\checkPerc()):?>
            <li><a href="albom.php">Персонажи</a>
            <?endif?>
            <li><a href="position.php">Рейтинг</a>
            <li><a href="main.php?autExit=1">Выход из аккаунта</a> 
        </ul>
    </nav>  


    <div class="sidebar">
      <div class="name-team"><?=$tableCommandId['Name'];?></div><br>
      <div class="kod">
        <?require_once 'input.php';?>
      </div>
    </div>


    <div class="body-main">
      <div class="row">


        <table border="1"  width="100%" cellpadding="5">
          <tr>
            <th>Позиция</th>
            <th>Название</th>
            <th>Очки</th>
            <th>Прогресс</th>
          </tr>
		<?for($i=0;$i<$countCommand;$i++):?>
          <tr>
            <td>
              <div class="position">
                <p><?=$i+1?></p>
              </div>
            </td>
            <td>
              <div class="name-tb">
                <p>
                  <?=$tablePosition[$i]['Name']?>
                </p>
              </div>
            </td>
            <td>
              <div class="points">
                <p>
                  <?=$tablePosition[$i]['Point']?>
                </p>
              </div>
            </td>
            <td>
              <div class="prog">
                <progress value="<?=$tablePosition[$i]['Point']?>" max="<?=$countAllPoint?>"></progress>
                <div class="proc"><p><?=number_format((float)(($tablePosition[$i]['Point']/$countAllPoint)*100), 2, '.', '');?>%</p></div>
              </div>
            </td>
          </tr>
		<?endfor?>
        </table>

      <!--<div class="col-sm-12">
        <div class="team  left">
          <p>МЫ - ЛИДЕРЫ!</p>
        </div>
        <div class="right">
       <div class="start left">0</div>
       <div class="prog left">
        <progress value="7" max="24"></progress>
      </div>
       <div class="end left">24</div>
     </div>
      </div>

      <div class="col-sm-12">
        
      </div> -->
    </div>
    </div>
  </body>
</html>

