<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <h1>Operadores de Atribuição em PHP</h1>
    <p>Os operadores são muito parecidos com os da linguagem C.Os operadores de atribuição do PHP são += -= *= /= %= e .=(usado para concatenação)</p>
    <p>Temos também os operadores de <strong>incremento e decremento</strong></p>
    <p>Comentários são realizados através dos simbolos '//' ou '#', para inline e '/*comentário*/', para multiline.</p>
    <h2>Exercícios 01</h2>
    <?php
        $preco = $_GET['preco'];
        echo "O preço do produto é R$".number_format($preco,2,",",".")."<br>";
        echo "10% a mais desse valor é R$".number_format($preco += ($preco*0.1),2,",",".");        
    ?>
    <h2>Exercícios 02</h2>
    <?php
        $atual = $_GET['atual'];
        echo "O ano atual é ".$atual--." e o anterior é $atual";//pós incremento               
    ?>
    <h2>Exercício 03</h2>
    <?php
        $a = 3;
        $b = $a;
        $b += 5;
        echo "&dollar;a=".$a.'<br>';
        echo "&dollar;b=".$b.'<br>';
        $b = &$a; //o '&' indica a atribuição do endereço da variável.
        $b += 5;
        echo "&dollar;a=".$a.'<br>';
        echo "&dollar;b=".$b.'<br>';
    ?>
    <h2>Exercício 04</h2>
    <p>Variáveis de variáveis ou variáveis variantes, são variáveis criadas a partir de outras</p>
    <?php
        $site = "cursoEmVideo";
        $$site = "cursoDePhp"; 
        $site = "youtube";
        $$site = "canalDaGalinhaPintadinha";// o valor da variável $site se torna uma nova variável;
        echo $site.'<br>';
        echo $cursoEmVideo.'<br>';
        echo $youtube;
        //os dois '$' transformam o valor da variável inicial em um novo identificador de variável
        //'site' se torna um "tipo" que gera identificados, ao meu ver até aqui.
    ?>
</body>
</html>