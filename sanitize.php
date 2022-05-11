<html>
<body>

<?php
/* Sanitização
Funções (filter_input - filter_var)
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
*/
?>

<?php
if(isset($_POST['enviar-formulario'])):
	//Array de erros
	$erros = array();

	//Sanitize

	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	
	$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
	if (!filter_var($idade, FILTER_VALIDATE_INT)):
		$erros[] = "Idade precisa ser inteiro";
	endif;

	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	if (!filter_var($idade, FILTER_VALIDATE_EMAIL)):
		$erros[] = "Idade precisa ser inteiro";
	endif;
	
	$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
	if (!filter_var($url, FILTER_VALIDATE_URL)):
		$erros[] = "URL INVÁLIDO";
	endif;

    //Exibindo mensagens
    if(!empty($erros))
    	foreach ($erros as $erro): 
    		echo "<li> $erro </li>";
    	endforeach;
    else:
    	echo "Parabéns, seus dados estão corretos!";

    endif;

endif;

?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Nome: <input type="tex" name="nome"><br>
		Idade: <input type="tex" name="idade"><br>
		Email:<input type="email" name="email"><br>
		URL:<input type="email" name="url"><br>
		<button type="submit"> Enviar </button>
	</form>

</body>
</html>
