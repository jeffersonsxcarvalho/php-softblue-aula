<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo um pouco de Orientação a Objetos</title>
</head>
<body>
    
    <?php
        Class Usuario {

            public $nome;
            public $sobrenome;

            function __construct($nome, $sobrenome){
                $this->nome = $nome;
                $this->sobrenome = $sobrenome;
            }  
            
            function apresentar(){
                echo '<br><br>Meu nome é: <h1>'. $this->nome . ' ' . $this->sobrenome. '</h1>';
            }  

        }

    ?>

        <form method="get">
            <input type="text" name="nome">
            <input type="text" name="sobrenome">
            <input type="submit" value="Enviar">
        </form>

    <?php
            if(isset($_GET['nome'])){
                $nome = $_GET['nome'];
                $sobrenome = $_GET['sobrenome'];

                $usuario = new Usuario($nome, $sobrenome);
                
            }

    

            if(isset($usuario)){
                $usuario->apresentar();
            }
            


    ?>

           
    
</body>
</html>