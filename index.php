<html>
<body>

<?php
/* Validações 
Funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/
?>

<?php
if(isset($_POST['enviar-formulario']))

?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Idade: <input type="tex" name="idade"><br>
		Email:<input type="email" name="email"><br>
		Peso:<input type="email" name="peso"><br>
		IP:<input type="email" name="ip"><br>
		URL:<input type="email" name="url"><br>

		<button type="submit"> Enviar </button>
	</form>

</body>
</html>



