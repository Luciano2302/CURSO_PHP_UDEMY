<div class="titulo">Arryas Multidimensionais</div>


<?php
 
 $dados =[ 
     "pessoa1" => [
     "nome" => "Roberto",
     "idade" => 26,
     "naturalidade" => "São paulo"
 ],
 [
     "nome" => "Maria",
     "idade" => 25,
     "naturalidade" => "Bahia"
 ]
 ];

 print_r($dados);
 echo '<br>'.$dados[0]['idade'];

 //atribuir novos valores ao array já existente

 echo '<br>';
 $dados[2]["Vizinho"] = "Chaves";
 echo '<br>'.$dados[2]['Vizinho'];

 echo '<br>';
 unset($dados['pessoa1']);
 print_r($dados);
 echo '<br>';
 var_dump($dados['pessoa1']);

 

?>