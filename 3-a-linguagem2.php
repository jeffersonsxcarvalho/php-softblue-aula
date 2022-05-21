<!DOCTYPE html>
<html>
<head>
	<title>Aula prática PHP - Softblue - Parte 2</title>
</head>
<body>
	<?php
		//Ele executa todas as vezes o mesmo arquivo;
		include('arquivo_auxiliar-a-linguagem2.php');
		include('arquivo_auxiliar-a-linguagem2.php');
		include('arquivo_auxiliar-a-linguagem2.php');
		include('arquivo_auxiliar-a-linguagem2.php');
		
		

		//Include once verifica se já foi importado!! Daí ele não imprime novamente.

		include_once('arquivo_auxiliar-a-linguagem2.php');

		//Require - Requer o arquivo, senão gera erro.
		require('arquivo_auxiliar-a-linguagem2.php');

		//Require_once - Mesmo que require porém valida se já exista ou não.
		require_once('arquivo_auxiliar-a-linguagem2.php');

		echo 'Hello<br>';

		$x = 0;

		while($x++ < 2){
			echo $x.'<br>';
		}

		$x = 3;

		if($x++ > 0 && $x++ < 5){
			$x += 1;
		}else{
			$x -= 1;
		}
		echo $x.'<br>';

		$x = 3; 

		$x = $x + ++$x;

		echo $x.'<br>';


		$x = 3;
		
		if($x++ == 6 || $x++ == 5 || $x++ == 4) {
		  $x = $x;
		}
		else {
		  $x = $x + $x++;
		}
		echo $x.'<br><br>';


		$nomes = array('Jefferson', 'Larissa', 'Mel');

		foreach ($nomes as $value) {
			if($value == 'Larissa'){
				break;
			}
			echo $value.'<br>';
		}

		for($x = 0 ; $x < 10; $x++){
			$y = $x;
			if($x == 9){
				continue;
			}
			echo $x . ' e ' . $y . '<br>';
		}

		echo '<br><br>'.$x . ' e ' . $y . '<br>';		
	?>
</body>
</html>

