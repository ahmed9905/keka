    <?if($errCode == 'Код введен'):?>
    <div class="okno">
      <div class="t">
         <h3>Ваш код принят</h3>
         <?if($nameAlbom == 'в Альбоме'){?>
         <p>
           Посмотрите страницу <a href="<?=$perehod?>"><?=$str?> </a><?=$nameAlbom?>
         </p>
         <?}elseif($nameAlbom == 'Персонажей'){?>
          <p>
           Посмотрите страницу <?=$nameAlbom?>
         </p>
         <?}?>
               <div class="pereh">
                <a href="<?=$perehod?>">Перейти на страницу</a>
               </div>

               <div class="exit1">
                <a href="<?=$page?>">Закрыть окно</a>
               </div>

      </div>
    </div>
    <?endif?>