<?php
// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e (&& - and)
// ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 26;
$nome = "Rodrigo";

if(!($idade == 25) and ($nome == "Rodrigo")):
    echo "É verdadeiro";
else:
	echo "É falso";
endif;