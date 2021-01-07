<div class="titulo">Desafio tabela while</div>



<?php

$matriz = [
    ['01','02','03','04','05'],
    ['06','07','08','09','10'],
    ['11','12','13','14','15'],
    ['16','17','18','19','20']
];




?>


<h3>Tabela sendo populada por uma matriz dentro de uma estrutura de repetição foreach</h3>
<table>
  <?php
foreach ($matriz as $linha) {
    echo "<tr>";
    foreach ($linha as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
?>
</table>


<hr>
<h3>Tabela sendo populada por uma matriz dentro de uma estrutura de repetição foreach fazendo aplicação de estilo css</h3>
<table>
  <?php
    foreach ($matriz as $index => $linha) { 
        $style = $index % 2 === 1 ?'background-color: lightblue;' : '';
        echo "<tr style='{$style}'>";
        foreach ($linha as $valor) {
            echo "<td>$valor</td>";
        }
        echo "</tr>";
    }
  ?>
</table>

<style>

  table {
      border:1px solid #444;
      border-collapse: collapse;
      margin: 20px 0px;
  }

  table tr{
      border: 1px solid #444;
  }

</style>