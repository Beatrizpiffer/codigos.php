<?php
//Botão enviar
if(isset($_POST['btn-entrar'])):
	echo "Clicou";
endif;
?>

<html>
<head>
    <title>Login</title>
	<meta charset="utf-8">
</head>
<body>

<h1> Login</h1>

<form action=<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
Login: <input type="text" name="login"><br>
Senha: <input type="passaword" name="senha"><br>
<button type="submit" name="btn-entrar"> Entrar </button>
</form>


</body>
</html>


<?php
//Conexão com banco de dados

$servername = "localhost";
$username = "root";
$passaword = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $passaword, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error
