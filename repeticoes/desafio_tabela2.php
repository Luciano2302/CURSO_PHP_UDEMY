<div class="titulo">Desafio tabela 2</div>


<h2>Formulario para gerar tabela com base nos valores submetidos</h2>
<div>
<form action="#" method="post">

<div>
<label for="nome">Nome: </label>
<input type="text" name="nome" />
</div>

<div>
<label for="idade">Idade: </label>
<input type="text" name="idade" />
</div>

<div>
<label for="profissao">Profissão: </label>
<input type="text" name="profissao" />
<div>
<button>Gerar tabela</button>
</form>
</div>

<hr>
<h2>Tabela populada com os dados do formulario</h2>

<table>

<?php

$array = [$_POST['nome'], $_POST['idade'], $_POST['profissao']];
echo "<tr>";
foreach ($array as $value) {
     echo "<td>$value</td>";  
}
echo"</tr>";
print_r($array);
?>
</table>

<hr>

<h2>Formulario para gerar tabela com base no numero de linhas e colunas informados</h2>
<div>
<form action="#" method="post">

<div>
<label for="nome">Colunas: </label>
<input type="text" name="colunas" />
</div>

<div>
<label for="idade">Linhas: </label>
<input type="text" name="linhas" />
</div>

<button>Gerar tabela</button>
</form>
</div>

<hr>
<h2>Tabela gerada pelo numero de linhas e colunas informadas</h2>
<table>

  <?php
    $colunas = $_POST['colunas'];
    $linhas  = $_POST['linhas'];
    $valorCelula = 0;

   for ($i=0; $i < $linhas; $i++) { 
       echo "<tr>";
      for ($j=0; $j<$colunas ; $j++) { 
        $valorCelula ++; 
        echo "<td>$valorCelula</td>"; 
       }
       echo"</tr>";
     }
    ?> 
</table>


<style>

  form {
      font-size:1.8rem;
    }

  form > div{
      margin-bottom: 10px;
  }  

  table {
      border:1px solid #444;
      border-collapse: collapse;
      margin: 20px 0px;
  }

  table tr{
      border: 1px solid #444;
  }

</style>