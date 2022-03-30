<?php
// Funções para Strings
/* strtoupper
   strtolower
   substr
   str_pad
   str_repeat
   strlean
   str_replace
   strpos
*/

$nome = "RODRIGO OLIVEIRA";
$novoNome = strtolower($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4, 6);

echo "<hr>";

$objeto = "mouse";
$novoObjeto = str_pad($objeto, 7, "*", STR_PAD_RIGHT);
echo $novoObjeto;

