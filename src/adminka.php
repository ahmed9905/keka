<?php
namespace Master\Admin;
require_once "conectbd.php";
require_once 'login.php';
//require_once 'register.php';
require_once 'inputcode.php';
$tableAllCodeCommand = \Master\Conectbd\inputTableLimit('master_code_command');
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
//date_default_timezone_set("UTC"); 
//echo $_SERVER['REQUEST_TIME'];
/*
  $code123=\Master\Conectbd\inputTableCode1();
  foreach ($code123 as $key => $value) {
      if($value['id_source']>0){
      echo "{$key}.Код = {$value['code']} pint = {$value['point']}<br> ";
    }else{
      echo "{$key}.Код персов = {$value['code']} <br> ";
    }
  }
  */
  	$tableAllPerconCommand = \Master\Conectbd\inputTableLimit('master_percon_command');
  	$countAllPerconCommand = count($tableAllPerconCommand);
    $countAllCodeCommand = count($tableAllCodeCommand);
	// текст + img
	//require_once 'page.php';
	//print_r($tableCode);
	//print_r($tableAllSource);
	//print_r($tableAllCodeCommand);
	//pri1nt_r($_COOKIE);
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


	<div class="sidebar">
      <div class="name-team">Админка</div><br>
      <div class="kod">
        <?//require_once 'input.php';?>
      </div>
    </div>

<div class="body-main">
	<p>Таблица открытых персонажей</p>
      <div class="row">
    <table border="1"  width="70%" cellpadding="5">
          <tr>
            <th>Номер</th>
            <th>Имя команды</th>
            <th>Код</th>
            <th>Картинка</th>
            <th>Время</th>
          </tr>
		<?for($i=0;$i<$countAllPerconCommand;$i++):?>
			<? $tableCommandId = \Master\Conectbd\inputUserId($tableAllPerconCommand[$i]['id_command']);?>
			<? $tablePerconId=\Master\Conectbd\inputCodeId($tableAllPerconCommand[$i]['id_code']); ?>
			<? $tableSourceId=\Master\Conectbd\inputSourceId($tableAllPerconCommand[$i]['id_percon'],'master_percon'); ?>
          <tr>
            <td>
              <div class="position">
                <p><?=$i+1?></p>
              </div>
            </td>
            <td>
              <div class="name-tb">
                <p>
                  <?=$tableCommandId['Name']?>
                </p>
              </div>
            </td>
             <td>
              <div class="name-tb">
                <p>
                  <?=$tablePerconId['code']?>
                </p>
              </div>
            </td>
            <td>
              <div class="points">
                <p>
                  <img src="<?=$tableSourceId['img_percon']?>" alt="">
                </p>
              </div>
            </td>
             <td>
              <div class="points">
              	<p>
                <?=$tableAllPerconCommand[$i]['datetime']?>
            	</p>
              </div>
            </td>
          </tr>
		<?endfor?>
        </table>
	</div>
	<p>Таблица открытых кодов</p>
      <div class="row">
    <table border="1"  width="70%" cellpadding="5">
          <tr>
            <th>Номер</th>
            <th>Имя команды</th>
            <th>Код</th>
            <th>Картинка</th>
            <th>Очки за код</th>
            <th>Время</th>
          </tr>
		<?for($i=0;$i<$countAllCodeCommand;$i++):?>
			<? $tableCommandId = \Master\Conectbd\inputUserId($tableAllCodeCommand[$i]['id_command']);?>
			<? $tableCodeId=\Master\Conectbd\inputCodeId($tableAllCodeCommand[$i]['id_code']);; ?>
			<? $tableSourceId=\Master\Conectbd\inputSourceId($tableAllCodeCommand[$i]['id_source']);; ?>

          <tr>
            <td>
              <div class="position">
                <p><?=$i+1?></p>
              </div>
            </td>
            <td>
              <div class="name-tb">
                <p>
                  <?=$tableCommandId['Name']?>
                </p>
              </div>
            </td>
             <td>
              <div class="name-tb">
                <p>
                  <?=$tableCodeId['code']?>
                </p>
              </div>
            </td>
            <td>
              <div class="points">
                <p>
                  <img src="<?=$tableSourceId['source_img']?>" alt="">
                </p>
              </div>
            </td>
            <td>
              <div class="points">
              	<p>
                <?=$tableAllCodeCommand[$i]['point']?>
            	</p>
              </div>
            </td>
             <td>
              <div class="points">
              	<p>
                <?=$tableAllCodeCommand[$i]['datetime']?>
            	</p>
              </div>
            </td>
          </tr>
		<?endfor?>
        </table>
	</div>
	<p>Рейтинг</p>
	<div class="row">

        <table border="1"  width="70%" cellpadding="5">

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
                <div class="proc"><p><?=($tablePosition[$i]['Point']/$countAllPoint)*100?>%</p></div>
              </div>
            </td>
          </tr>
		<?endfor?>
        </table>


    </div>
</div>

</body>
</html>