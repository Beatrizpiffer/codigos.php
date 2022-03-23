<?php
 /*
 *Condicionais 
 *if
 *else
 *elseif
 *switch
 *case;
 */

/*
$numero = 8;

if($numero == 10):
	echo "é igual a 10";
elseif($numero <= 9):
    echo "é menor ou igual a 9";
else:
    echo "é diferente de 10";
endif;

echo "<hr>";

$media = 7;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
*/

$cor = "preto";

switch ($cor): 
    case "vermelho":
    echo "Sua cor preferida é o vermelho";
    break;

    case "verde":
    echo "Sua cor preferida é o verde";
    break;

    case "azul":
    echo "Sua cor preferida é o azul";
    break;

    default:
    echo "Sua cor preferida não é vermelho, verde ou azul.";

endswitch;
