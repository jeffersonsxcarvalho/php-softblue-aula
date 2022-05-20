<!DOCTYPE html>
<html>
<head>
	<title>Linguagem PHP - SoftBlue</title>
</head>
<body>

	<?php
		echo 'Hello world! <br>';

		$var1 = 'PHP';
		$variavelValor = 50.15;
		echo $var1 . '<br>';
		echo $variavelValor . '<br>';

		define("PI", 3.14);
		define("NOME_EMPRESA", "JeffersonNit - Idioma");

		$resultado = 3 * PI;

		echo $resultado;

		echo 'Nome da empresa: ' . NOME_EMPRESA . '<br>';

		$x = 3 + 5;

		echo $x . '<br>';

		$x = 3 - 5;

		echo $x . '<br>';

		$x = 3 * 5;

		echo $x . '<br>';

		$x = 3 / 5;

		echo $x . '<br>';

		$x = 3 % 5;

		echo $x . '<br>';

		$x = 3;

		$x++;

		echo $x.'<br>';

		++$x;

		echo $x . '<br>';

		$z = 1 + $x++;

		$w = 1 + ++$x;

		echo $z . ' ' . $w.'<br><br>';

		// Arrendondamento.

		$num1 = round(5.55,1, PHP_ROUND_HALF_DOWN);

		echo $num1.'<br>';

		$num2 = round(5.55,1, PHP_ROUND_HALF_UP);

		echo $num2.'<br>';

		$num3 = round(5.55,1, PHP_ROUND_HALF_EVEN);

		echo $num3.'<br>';

		$num4 = round(5.55,1, PHP_ROUND_HALF_ODD);

		echo $num4.'<br>';

	?>

</body>
</html>