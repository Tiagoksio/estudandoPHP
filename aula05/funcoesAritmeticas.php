<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <h1>Funções Aritméticas em PHP</h1>
    <ul>
        <li>abs(): Retorna o valor absoluto de um número</li>
        <li>pow(): Calcula a raiz quadrada de um número</li>
        <li>sqrt(): Calcula a raiz quadrada de um número</li>
        <li>round(): Arredonda valores
        <ul>
            <li>Se o valor for baixo de 0.5, arredonda para baixo, caso contrário, para cima;</li>
            <li>ceil(): arredonda para cima;</li>
            <li>floor(): arredonda para baixo;</li> 
        </ul>
        </li>
        <li>intval(): Trunca um número, coleta apenas a parte inteira</li>
        <li>number_format(): Formata um número Real</li> 
    </ul>
    <p>Abaixo, a saida das funções. Para mais detalhes, veja o código fonte.</p>
    <p>Passados os parâmetros na url:'?x=4&y=-3'</p>
    <?php
        $n1 = $_GET['x'];
        $n2 = $_GET['y'];
        echo "<strong>&dollar;n1 = $n1; <br>&dollar;n2 = $n2;</strong>";
        echo "<br>O valor absoluto de $n2 = ".abs($n2);
        echo "<br>O valor de $n1<sup>".abs($n2)."</sup> = ".pow($n1, abs($n2));
        echo "<br>A raiz quadrada de $n1 = ".sqrt($n1);
        echo "<br>O valor arredondado de $n1<sup>$n2</sup> = ". round(pow($n1, $n2));
        echo "<br>A parte inteira de $n1<sup>$n2</sup> = ".intval(pow($n1, $n2));
        echo "<br>O valor de $n1 em moeda com 2 casas decimais e com separador vírgula é R$: ".number_format($n1,2,',','.');
    ?>
</body>
</html>