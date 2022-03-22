<?php
//Arrays numéricos
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros [1];
echo "<br>";

$motos = array
$motos[1] = "Yamaha";
$motos[2] = "Honda";
$motos[3] = "Suzuki";
echo $motos[3];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "Bia"];
print_r($clientes);
echo "<hr>";

//Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach ($clientes as $valor) {
	echo $valor."<br>";
}
echo "<hr>";

//Arrays associativos
$pessoa = array("nome"=> "Rodrigo", "idade" => 23, "altura"=> 1.75);
$pessoa["cidade"] = "Itabuna";

foreach($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";

//Arrays multidimensionais
$times = array(
	"cariocas"=> array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro" => "botafogo"),
    "paulistas"=> array("santos","sao paulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "itabuna")
    );
echo $times ["paulistas"] [1];
echo "<br>";

foreach ($times ["cariocas"] as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}