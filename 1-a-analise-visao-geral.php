<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto 1 - PHP SoftBlue</title>
</head>
<body>
	<h1>Olá, mundo!</h1>

	<?php
	//Redirecionamento de fluxo
	 //header("Location:https://jeffersonnit.com.br");

	//Short IF - Não tenho o hábito de usar mas preciso praticar mais
	 2<2 ? $y = 'É menor' : $y = 'Não é menor';
	 echo $y.'<br>';




	 //Trabalhar com o for também que não tenho muito hábito
	 for($i=0; $i<10; $i++){
	 	echo $i.'<br>';
	 }

	 //Array
	 $a = ['Jefferson', 'Larissa'];
	 $b = array('Jefferson', 'Larissa', 'Mel');
	 echo $a[0].'<br> ';
	 echo $b[2]. '<br>';

	 // Uso do foreach para array
	 foreach($b as $meuarray){
	 	echo $meuarray.'<br>';
	 }

	 // Conhecendo a variável $_SERVER

	 //o IP do meu servidor
	 echo $_SERVER['SERVER_ADDR'].'<br>';
	 // O Nome do meu servidor WEB
	 echo $_SERVER['SERVER_NAME'].'<br>';
	 //Apresenta algumas props de codificação do servidor
	 echo $_SERVER['HTTP_ACCEPT_ENCODING'].'<br>';
	 //Trará algumas informações do usuário que está navegando no meu site;
	 echo $_SERVER['HTTP_USER_AGENT'].'<br>';
	 //IP do usuário;
	 echo $_SERVER['REMOTE_ADDR'].'<br>';


	?>
</body>
</html>