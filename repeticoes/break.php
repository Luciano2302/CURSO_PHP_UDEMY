<div class="titulo">Break</div>


<?php

$count = 10;

//exemplo que mostra o for infinito sem condição definiando quantas vezes o laço se repetiria
//dentro do for é definido a logica de parada usando o break para exemplificação.
for (; ; ) { 
    echo "$count <br>";
    $count++;
    if($count > 20){
        break;
    }
   }

echo "<hr>";

$count2 = 16;

for (; ; ) { 
    $count2++;
    if($count2 % 2 === 1 ){
        //aqui ele entra caso o numero for impar e volta para o laço de repetição para pegar o proximo elemento
        continue;
    }

    echo "$count2 <br>";
    if($count2 >= 30){
        break;
    }
}


//exempo foreach utilziando o continue e o break para controle do laço

echo "<hr>";

$array =[1,2,3,4,5,6];

foreach ($array as $elemento) {
    if($elemento  > 6){
       break;
    }

    if($elemento % 2 === 1){
        continue;
    }
    echo "$elemento <br>";
}
?>