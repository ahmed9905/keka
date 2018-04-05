<?php
namespace Master;
  
   function getIn($data,$put)
{ 
    if(count($data) == 0 || count($put)==0)
    {
        return null;
    }
    $result = $data;
    foreach($put as $value)
    {
        if(array_key_exists($value,$result)){
            $result = $result[$value];
        }else{
            $result = null;
            return $result;
        }
    }
    return $result;
}
$data = [
            'user' => 'ubuntu',
            'hosts' => [
                ['name' => 'web1'],
                ['name' => 'web2']
            ]
        ];
echo getIn($data, ['undefined']);
/*
*1) 2 указателя для каждого из массивов, нач знач 0;
*2) проверка элементов под индексом в обоих массивах
*3) если совпадают то знач заносится в результ массив и оба индкса ++
*4) если знач 1массзнач > 2массзнас то индекс2масс ++ иначе индекс1масс++
*/

//print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]));

//    echo countUniqChars('Fear cuts deeper than swords.');
/*
require_once 'login.php';
//require_once 'src\register.php';
//require_once 'src\inputcode.php';
	if(isset($_COOKIE['id'])){
  	header("Location: main.php"); 
	}

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
    <link rel="stylesheet" href="/css/bootstrap.css">
    
  </head>
  <body>
	 <form method="POST">
          <div class="intro">
            <div class="intro1">
              <div class="text-main">
                <h1>Мой дневник</h1>
              </div>
              <div class="vvod1">
                <p>Ваш логин</p>
                <input size="25"  name="login" type="text" required">
                <p>Ваш пароль</p>
                <input size="25" name="password" type="password" required">
              </div>
              <? if(isset($errLogin)){?>
              <div class="error">
              	<p><?=$errLogin?></p>
              </div>
              <?}?>
              <div class="butt">
                     <input name ="aut" type="submit" value="Войти">
            </div>
            </div>
          </div>
          </form>
</body>
</html>

*/