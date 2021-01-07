<div class="titu">Teste Senai</div>



<?php

$array = [3,1,2];

$len = count($array);
for ($i = 0; $i < $len; $i++) { 
   for ($j=0; $j < $len ; $j++) {
          $y = $array[$i];
          $array[$i] = $array[$j];
          $array[$j] = $y;
   }
       
   }


print_r($array);






?>