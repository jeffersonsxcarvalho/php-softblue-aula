<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Aula de Array</title>
</head>
<body>
    <?php

        // Definição de Arrays normal
        $x = array('Hello','Hello2', 'Hello3', 'Hello4');

        // Acessar elemento de Array (Começando sempre em 0 e indo até o número de elementos menos 1)
        $x0 = $x[0];

        echo $x0 .'<br>';

        // Definição de Arrays com índices relacionais.
        $y = array('Aula' => 'Hello', 'Aula2' => 'Hello2', 'Aula3' => 'Hello3', 'Aula4' => 'Hello4');

        // Acessar elemento de Array (Aqui você acessa pelo nome antes da setinha o elemento depois dela);
        $y0 = $y['Aula'];



        // Definição de Arrays dentro de arrays Normal
        $w = array('Hello','Hello2', array('Hello3','Hello4'));

        // Acessar elemento de Array (Aqui você acessa o elemento pelo número 'começando em 0 e depois, se for um array, um outro número dentro para acessar o elemento dentro do array);
        echo '<h1>'.$w[2][1].'</h1>'; 

        // Definição de Arrays dentro de arrays por índice relacional
         $z = array('Aula' => 'Hello', 'Aula2' => 'Hello2', 'Aulas' => array('Hello3','Hello4'));

        // Acessar elemento de Array (Acesso o 3º elemento que é um array, depois acesso o primeiro elemento desse outro array (lembra que começa sempre com o));
         echo '<h1>'.$z['Aulas'][0].'</h1>'; 

        // Mas e se o array de dentro também tiver índices relacionais?
         $z1 = array('Aula' => 'Hello', 'Aula2' => 'Hello2', 'Aulas' => array('Aula3' => 'Hello3','Aula4' => 'Hello4'));

        // Daí, basta acessar esse array como acima e depois pegar o elemento desse array com o índice;
         echo '<h1>'.$z1['Aulas']['Aula4'].'</h1>';

        // Essa função print_r printa todos os elementos do array.
         print_r($x);
         print '<br>';
         print_r($y);
         print '<br>';
         print_r($z);
         print '<br>'; 
         print_r($z1);
         print '<br><br>'; 

        //Criando um Array
            //Exemplo com array vazio, a gente tenta acessar e ele retorna vazio.
            
            /*$meuArray = array();
            echo $meuArray[1];*/

            //Exemplo com array, a gente tenta acessar com 0, 1 e 2.
            $meuArray = array('Maçã', 'Pêra', 'Uva');
            echo $meuArray[1];
            echo '<br><br>';

            // Mudando valores manualmente.
            $meuArray[1] = 'Laranja';
            echo $meuArray[1];
            echo '<br><br>';

            //Excluir posições com o comando unset
            $excluirArray = array('Aula' => 'Hello', 'Aula2' => 'Hello2');
            unset($excluirArray[0]);

            // Vamos printar o array agora só pra podermos ver.
            print_r($excluirArray); // Neste caso, sumiu o elemento 'Aula' => 'Hello'
            echo '<br><br>';

            // Comandos sizeof ou count - É como se fosse o comando strlen (que vê o tamanho de string), esses no caso, retornam o tamanho de um array.
            // Vamos tentar

            echo sizeof($z).'<br><br>'; // Neste caso $z = array('Aula' => 'Hello', 'Aula2' => 'Hello2', 'Aulas' => array('Hello3','Hello4')), retorna três, lembra que aqui o terceiro elemento['Aulas'], mesmo sendo um array, não deixa de ser 1 elemento do array $z, por isso ele vai retornar 3. Vamos fazer um exemplo mas com o tamanho do array que está dentro da última posição de z que é o array 'Aulas'.

            echo sizeof($z['Aulas']).'<br><br>'; // Aqui ele retorna 2

            // Vamos exemplificar a mesma coisa, porém com o comando count.

            echo count($z).'<br><br>'; // Neste caso $z = array('Aula' => 'Hello', 'Aula2' => 'Hello2', 'Aulas' => array('Hello3','Hello4')), retorna três, lembra que aqui o terceiro elemento['Aulas'], mesmo sendo um array, não deixa de ser 1 elemento do array $z, por isso ele vai retornar 3. Vamos fazer um exemplo mas com o tamanho do array que está dentro da última posição de z que é o array 'Aulas'.

            echo count($z['Aulas']).'<br><br>'; // Aqui ele retorna 2


            // Comando foreach - Ele percorre todo o array atribuindo cada posição do array à variável $fruta em cada iteração.

            foreach ($meuArray as $fruta){
                echo 'Temos <b>' . $fruta . '</b> no estoque!<br><br>';
            }

            // O Comando array_push(array, elemento), acrescenta mais um elemento na última posição do array em questão.

                array_push($meuArray, 'Morango');
                

                //Anteriormente, o array $meuArray só tinha 3 elementos, vamos agora printar ele com mais um elemento.
                print_r($meuArray);
                echo '<br><br>';


                //Vamos acrescentar mais um
                array_push($meuArray, 'Goiaba');

                //Anteriormente, o array $meuArray só tinha 4 elementos, vamos agora printar ele com mais um elemento.
                print_r($meuArray);
                echo '<br><br>';


            // O Comando array_pop(array), remove a última posição do array em questão.

                //Nesse caso, basta o nome do array
                $salvoPop = array_pop($meuArray);

                //Anteriormente, o array $meuArray tinha 4 elementos, vamos agora printar ele com menos um elemento (Sem o elemento Goiaba).
                print_r($meuArray);
                echo '<br><br>';

                 //Podemos printar esse elemento que saiu como $salvoPop - Se quisermos manter a variável. - Já que atribuimos a $salvoPop acima.
                 print_r($salvoPop);
                 echo '<br><br>';

            // O comando array_shift(array) já remove o primeiro elemento
                // primeiro exemplo abaixo.

                $salvoShift = array_shift($meuArray);

                //Anteriormente, o array $meuArray tinha 3 elementos, vamos agora printar ele com menos um elemento (Sem o elemento Maçã).
                print_r($meuArray);
                echo '<br><br>';

                //Para acessar o elemento excluido, já atribuimos a $salvoShift.

                echo $salvoShift;
                echo '<br><br>';

            

            // O comando array_unshift(array, valor) já insere o primeiro elemento
                // primeiro exemplo abaixo, vamos retornar Maçã para o primeiro elemento do Array. Usando o $salvoShift

                array_unshift($meuArray, $salvoShift);

                //Anteriormente, o array $meuArray tinha 3 elementos, vamos agora printar ele com menos um elemento (Sem o elemento Maçã).
                print_r($meuArray);
                echo '<br><br>';

            // O comando array_map(função, array) permite criar alguma função sobre o array.

                function insereValor($valor){
                    return 'R$ '.$valor;
                }

                $novoArray = array_map('inserevalor',$meuArray); //Nesse caso ele insere a função insereValor()

                //Anteriormente, o array $meuArray tinha 3 elementos, vamos agora printar ele com menos um elemento (Sem o elemento Maçã). 
                print_r($novoArray);
                echo '<br><br>';

            // O comando array_key_exist(chave, array) permite se, no caso de arrays com chaves, se a tal chave existe  
                /* Nosso exemplo será com o array 

                    $z1 = array('Aula' => 'Hello', 'Aula2' => 'Hello2', 'Aulas' => array('Aula3' => 'Hello3','Aula4' => 'Hello4')); 

                e vamos procurar saber se existe ou não. Lembrando que oo comando array_key_exist, não retorna o valor do elemento, mas sim false(0) se não existe ou true(1) se existe.*/

                // Vamos ver se a chave Aula existe.

                echo 'Nesse caso não existe a chave Aula: '.array_key_exists('Aula', $z1).'<br>';

                //// Vamos ver se a chave Aula5 existe.

                echo 'Nesse caso não existe a chave Aula: '.array_key_exists('Aula5', $z1).'<br><br>';

            // O comando array_keys(array) retorna, no caso de arrays com chaves, um novo array com os nomes das chaves .

                // Vamos ver se como fica o novo array.

                $arrayChaves = array_keys($z1);

                //// Vamos printar esse novo Array.

                print_r($arrayChaves);
                echo '<br><br>';

                // Pegando o nome das chaves separadamente com um foreach.

                foreach($arrayChaves as $nomeChave){
                    echo $nomeChave.'<br><br>';
                }

            // O comando array_search(elemento, array) retorna, no caso de arrays com chaves, a chave do elemento do array.

                // Vamos, neste exemplo, a chave do elemento 'Hello2'.

                $chave = array_search('Hello2',$z1);

                //// Vamos printar esse novo Array.

                echo $chave;
                echo '<br><br>';

            // O comando in_array(elemento, array) retorna se o elemento existe no array ou não.

                // Vamos, neste exemplo, o elemento 'Aula2'.

                $existeEl = in_array('Aula2', $z1);

                echo $existeEl .'<br><br>'; //Retorna false(0) ou true(1) (Neste caso False, porque o Aula2 é chave não elemento);

                //Vamos testar com o elemento Hello2 agora.

                $existeEl = in_array('Hello2', $z1);

                echo $existeEl .'<br><br>'; //Retorna false(0) ou true(1) (Neste caso False, porque o Aula2 é chave não elemento);


            // O comando shuffle(array) retorna o mesmo array, porém embaralhado.

                // Vamos, neste exemplo, embaralhar o array $z1.

                shuffle($z1);

                print_r($z1);
                echo '<br><br>';

            // O comando sort(array) retorna o mesmo array, em ordem crescente - alfabética.

                // Vamos, neste exemplo, ordenar o array $z1.

                sort($z1);

                print_r($z1);
                echo '<br><br>';

            // Já o comando sort(array) retorna o mesmo array, em ordem decrescente.

                // Vamos, neste exemplo, ordenar o array $z1.

                rsort($z1);

                print_r($z1);
                echo '<br><br>';

            // O comando parse_str(string, $arrayResultado) transforma uma string em um array. Bastando saber como escrever a string.
                // Exemplo que vamos usar
                
                //  'nome=Roberto&idade=28&esporte=natação&profissão=Engenheiro'

                
                parse_str('nome=Roberto&idade=28&esporte=natação&profissão=Engenheiro', $vetor);

                print_r($vetor);
                echo '<br><br>';

            // O comando explode(divisor, string[, número máximo de divisão]) transforma uma string em um array. Com cada posição sendo criada toda vez que o divisor aparecer na string.
                // Exemplo que vamos usar

                $resultExp = explode(' ', 'Olá pessoal, espero que possa sempre ajudar vocês.');

                print_r($resultExp);
                echo '<br><br>';

                // Podemos limitar o número de posições do array também

                $resultExpLim = explode(' ', 'Olá pessoal, espero que possa sempre ajudar vocês.', 4);
                print_r($resultExpLim);
                echo '<br><br>'; // Ele não perde informações, o último elemento do array fica como todo o resto da string.

            // O comando explode([divisor,] array) transforma um array em uma string com todos os valores dela, ou então podemos usar um separar ou divisor. 
                
                // Exemplo que vamos usar

                $resultImp = implode($z1);

                echo $resultImp;
                echo '<br><br>';
                
                // Podemos colocar um separador também

                $resultImpSep = implode(' - ', $z1);

                echo $resultImpSep;
                echo '<br><br>';

            


                

                







        




    ?>
</body>
</html>