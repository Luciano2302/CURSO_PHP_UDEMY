<div class="titulo">Desafio classe data</div>



<?php

class Data {

 public $dia = 1;
 public $mes = 'Janeiro';
 public $ano = 1970;
 

 public function apresentarData(){
    echo "A Data é: {$this->dia}/{$this->mes}/{$this->ano}<br>";
 }

}

$data = new Data();
$data->apresentarData();

$data2 = new Data;
$data2->dia = 23;
$data2->mes = 11;
$data2->ano = 2021;

$data2->apresentarData();


?>