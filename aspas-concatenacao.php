<?php
$nome = 'Rodrigo Oliveira';
echo 'Meu nome é '.$nome.' e minha idade é \'23\'';
echo '<hr>'
echo "Meu nome é $nome";


//escopo de variaveis //

//Escopo GLOBAL

$nome = "Rodrigo Oliveira";
$a = 1;
$b = 3;
$c = 7;

function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";
///////////////////////////////

function exibeCidade() {
	//Escopo Local
	global $cidade;
	$cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
///////////////////////////////

function soma () {
     $GLOBALS['a'] + $$GLOBALS['b'] + $$GLOBALS['c'];
}
 
 soma();
 