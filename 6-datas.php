<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datas e Funções Especiais</title>
</head>
<body>
    <?php

    //Primeiramente vou mudar o fuso horário para trabalhar com a hora da minha localização.

    
    date_default_timezone_set ("America/Sao_Paulo");
    echo date_default_timezone_get ().'<br><br>';


    // A função time(data) retorna a diferença de segundos entre uma data específica e 01/01/1970

        //Se não especificar a data ele vai considerar agora.
        $agora = time();
        echo $agora.'<br><br>';

        //Para saber a difereça de minutos, basta dividir por 60.
        $agoraMins = time()/60;
        echo $agoraMins.'<br><br>';

        //Para saber a difereça de horas, basta dividir por 60 e depois dividir por 60 denovo (Ou por 60**2).
        $agoraHoras = time()/60/60;
        echo $agoraHoras.'<br><br>';

        //Para saber a difereça de dias, basta dividir por 60 e depois dividir por 60 denovo (como antes) e depois dividir por 24.
        $agoraDias = time()/60/60/24;
        echo $agoraDias.'<br><br>';

        //Para saber a difereça de anos, basta dividir por 60 e depois dividir por 60 denovo  e depois dividir por 24 (como antes) e depois dividir por 365.
        $agoraAnos = time()/60/60/24/365;
        echo $agoraAnos.'<br><br>';

        //Para não precisar ficar fazendo essas manipulações dessa forma, podemos formatar as datas através da função date(formatação[, timestamp] ); A função time é um timestamp, na função date, colocar o timestamp é opcional, porém, se não colocar ele considera o timestamp = tme();

        $data = date("d-m-Y | H:i:s", time());
        echo $data.'<br><br>';
        // retorna: dd mm aa (Se eu quiser o formato aaaa então ao invés de y eu coloco Y).

        // Se tirar o timestamp time(), ele vai retornar o mesmo valor.
        $date = date("d-m-Y | H:i:s");
        echo $date.'<br><br>';
        // retorna: dd mm aa (Se eu quiser o formato aaaa então ao invés de y eu coloco Y).

        //Se eu quiser informações específicas como por exemplo, o dia.
        $data = date('d'); 
        echo $data.'<br><br>';

        //Se eu quiser informações específicas como por exemplo, o mês.
        $data = date('m'); 
        echo $data.'<br><br>';

        //Se eu quiser informações específicas como por exemplo, o mês.
        $data = date('y'); 
        echo $data.'<br><br>';

        //E assim por diante...

        // Algumas operações

        //Por esemplo se eu quiser saber a data de amanhã.

        //Para isso usamos a função strtotime(qual operação, timestamp)

        //Somando 1 dia ao momento atual
        $amanha = strtotime("+ 1 day", time());
        echo $amanha.'<br><br>';
        echo date("d-m-Y", $amanha).'<br><br>';


        //Fazendo outras operações

        // Somando 7 dias
        echo date("d-m-Y | H:i:s", strtotime("+ 7 day", time())).'<br><br>';

        // Descobrindo a próxima Segunda Feira
        echo date("d-m-Y | H:i:s", strtotime("Next monday", time())).'<br><br>'; // Colocando a parte H:i:s, como ele está procurando somente por segunda feira, a hora será marcada como 00:00:00, por isso não precisa colocar, assim como foi feito na instrução abaixo.

        // Descobrindo a data da última sexta feira.
        echo date("d-m-Y", strtotime("last friday", time())).'<br><br>';

        // Somando Horas
        echo date("d-m-Y | H:i:s", strtotime("+ 10 hour", time())).'<br><br>';

        // Somando uma semana ao dia atual (Pode ser usado caso queiramos dar acesso por uma semana, entre outras coisas.)
        echo date("d-m-Y | H:i:s", strtotime("+ 1 week", time())).'<br><br>';

        // Somando Meses
        echo date("d-m-Y | H:i:s", strtotime("+ 3 months", time())).'<br><br>';

        //A função mktime(h,m,s,m,d,a) recebe parâmetros de uma data e hora específicas e retorna o timestamp da data.

        $timeStamp = mktime(0,0,0,1,1,2000);
        echo $timeStamp.'<br><br>';

        // Lembra que a função acima retorna o timestamp e não a data, mas como já sabemos formatar data, basta usar a formatação com a função date() e usar esse $timeStamp que obtemos.

        echo date("d-m-Y | H:i:s", $timeStamp).'<br><br>';


        // Cuidado com a formatação, quando coloca a data no banco de dados a maioria só trabalha com datas no formato americano. Portanto é importante só colocar no formato brasileiro quando for apresentar para o usuário.

        echo date("Y-m-d H:i:s", $timeStamp).'<br><br>';

        // Suponha que o usuário escreva uma data que não existe. É importante validar para não cadastrar dado inválido.

        // O comando checkdate(m, d, a) retorna um valor booleano, para saber se existe ou não essa data TRUE(existe), FALSE(não existe);
        
        $data1 = checkdate(2,15,2020);

        if($data1){
            echo "A data 1 existe<br><br>";
        }else{
            echo "A data 1 não existe<br><br>";
        }

        $data2 = checkdate(13,15,2020);

        if($data2){
            echo "A data 2 existe<br><br>";
        }else{
            echo "A data 2 não existe<br><br>";
        }



        // Precisamos muitas vezes também fazer o cálculo de diferença de datas, então precisamos de duas datas.

        $data1 = mktime(0,0,0,11,29,2022);

        $data2 = mktime(0,0,0,12,31,2022);

        // Atribuimos a diferença em segundos a $diffSegs.
        $diffSegs = $data2 - $data1;

        echo 'A diferença entre as datas é de: '.$diffSegs.' segundos.<br><br>';

        // Atribuimos a diferença em minutos a $diffMins.
        $diffMins = $diffSegs/60;

        echo 'A diferença entre as datas é de: '.$diffMins.' minutos.<br><br>';

        // Atribuimos a diferença em horas a $diffHoras.
        $diffHoras = $diffMins/60;

        echo 'A diferença entre as datas é de: '.$diffHoras.' horas.<br><br>';

        // Atribuimos a diferença em dias a $diffDias.
        $diffDias =  $diffHoras/24;

        echo 'A diferença entre as datas é de: '.$diffDias.' dias.<br><br>';
















    ?>
</body>
</html>