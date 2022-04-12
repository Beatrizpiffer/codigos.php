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
if(isset($_POST['enviar-formulario'])):
	$erros = array();
	
	if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser um inteiro"
    endif;
    
    if(!empty($erros)):
    	foreach ($erros as $erro):
    		echo "<li> $erro </li>";
    	endforeach;
    else:
    	echo "Parabéns, seus dados estão corretos!";
    	
    endif;

endif;

?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Idade: <input type="tex" name="idade"><br>
		Email:<input type="email" name="email"><br>
		Peso:<input type="email" name="peso"><br>
		IP:<input type="email" name="ip"><br>
		URL:<input type="email" name="url"><br>

		<button type="submit"> Enviar </button>
	</form>
