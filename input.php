
<?if(\Master\Conectbd\checkSlom()){?>
<?$timeSlom=\Master\Conectbd\inputCheckSlom();?>
<div class="okno">
      <div class="t">
         <h3>ВНИМАНИЕ !</h3>
          <p>
          	Срочно, бросайте свои дела, ровно  в <?=$timeSlom?> жду вас в обозначенном месте!<br>
			Поспешите, пожалуйста.
         </p>
      </div>
    </div>
<?}else{?>

<form action="" method="POST">
	<input type="text" name="code" placeholder="<?=$errCode?>">
	<input type="submit" name = "inputcode" value="Отправить">
</form>
<?}?>