<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    
    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
      echo "Objeto destruido!";
    }


    public function apresentar(){
        echo "$this->nome<br>";
        echo "$this->idade<br>";
    }

}

$pessoa = new Pessoa("Luciano",32);
$pessoa->apresentar();

//o metodo unset é responsável por chamar o metodo destrutor do objeto
unset($pessoa);





?>