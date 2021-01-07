<div class="titulo">Teste Switch</div>


<?php

$categoria = 'sedan';
$preco = 0.0;
$carro = '';

switch ($categoria){
    
    case 'luxo':
      $carro = 'Mercedes';
      $preco = 250000;
      break;

    case 'suv':
      $carro = 'Renegate';
      $preco = 80000;
      break;

    case 'sedan':
      $carro = 'Etios';
      $preco = 55000;
      break;  

    default:
      $carro = 'Mobi';
      $preco = 3300;
      break;
   }

   
$precoFormatado = number_format($preco,2,',' ,'.');

echo "<p>Carro: $carro <br> Preço: R$ $precoFormatado</p>"

?>