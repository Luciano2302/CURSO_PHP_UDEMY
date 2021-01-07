<div class="titulo">Array $_GET</div>



<?php
echo $_GET;
echo'<br>';
print_r($_GET);
//para o echo abaixo foi inserido direto na url o paramaetro nome = luciano para poder imprmir o nome  Ex:ulr http://localhost:8080/array/array_get.php?nome=Luciano
echo'<br>'.$_GET["nome"];




?>