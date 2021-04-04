<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Relacionais</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <h1>Operadores de Relacionais em PHP</h1>
    <p>Os operadores são muito parecidos com os da linguagem C.Os operadores relacionais do PHP são ==, >, <, >=, <=, != e os que testam igualdade no tipo, o idêntico ou não idêntico === e !==</p>
    <p>Temos também os operadores ternários <strong>expressão?verdade:falso;</strong></p>
    <h2>Exercícios</h2>
    <p>Inclua na url o valor da nota através de '?nota=10', por exemplo</p>
    <?php
        $nota = $_GET['nota'];
        $situacao = ($nota >= 5)?"aprovado":"reprovado";
        echo "Você está $situacao<br>";
        /*
        $n1 = 3;
        $n2 = "3";
        echo (($n1 !== $n2)?'sim':'não'); //Testa se os valores são idênticos ou não.
        */
    ?>
    <h2>Operadores Lógicos</h2>
    <p>Temos o operador 'não':'!';<br>O 'E':'and' ou '&&';<br>O 'ou':'or' ou '||'<br>E temos o 'ou exclusivo': 'xor', que retorna verdade quando os operandos forem diferentes</p>
</body>
</html>