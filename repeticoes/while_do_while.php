<div class="titulo">While e Do While</div>



<?php

const valorLimite = 5;
$contador = 0;
$contador2 = 0;

echo "<h2>Exemplo While repete enquanto contador menor que 5</h2>";

while ($contador <= valorLimite) {
   echo "while $contador <br>";
   $contador++;
}

echo "<hr>";
echo "<h2>Exemplo DO while repete enquanto contador menor que 5</h2>";


do {
    echo "Do while $contador2 <br>";
   $contador2++;
} while ($contador2 <= valorLimite);




?>