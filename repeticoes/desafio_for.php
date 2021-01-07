<div class="titulo">Desafio for</div>

<!--
#
##
###
####
#####
1) pode usar incremento  $i++
2) opcao não pode usar o incremento $i++
-->

<?php


//minha solução
for ($i=0; $i < 5; $i++) { 
    
    switch ($i){
        
        case 0:
         echo "# <br>";
         break;
        
        case 1:
         echo "## <br>";
         break;
        
        case 2:
          echo "### <br>";
          break;

        case 3:
          echo "#### <br>";
          break;  

        case 4:
          echo "##### <br>";
          break;
        
        default:
         break;  
    }
}
    echo "<hr>";



    //primeira Solucao professor
    $impressao = '';
    echo "Solução professor <br>";
    for ($j = 0; $j < 5 ; $j++) { 
        $impressao .= '#'; 
        echo "$impressao <br>";
   }

   echo "<hr>";

   //segunda solucao professor sem usar operacoes artimeticas de soma ou incremento dos contadores
   $impressao2 = '';
    echo "Segunda Solução professor <br>";
    for ($impressao2 = '#' ; $impressao2  !== '######';  $impressao2 .= '#' ) { 
        echo "$impressao2 <br>";
   }

?>