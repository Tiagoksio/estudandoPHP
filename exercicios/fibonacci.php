<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência Fibonacci</title>
</head>
<body>
    <h1>Sequência Fibonacci</h1>
    <p>Exercício de sequência fibonacci para exemplificar uso de funções e passagem de parâmetro por referência</p>
    <form action="fibonacci.php" method="get">
        <label for="iQtdFibonacci">Quantidade de números da sequência Fibonacci: </label><input type="number" name="qtdNumFibonacci" id="iQtdFibonacci">
        <input type="submit" value="Mostrar">
    </form>
    <?php
        $qtdFibonacci = $_GET['qtdNumFibonacci'];
        $numA = 0;
        $numB = 1;
        for ($i=0; $i < $qtdFibonacci ; $i++) { 
            echo "$numA ";
            fibonacci($numA, $numB);
        }
        function fibonacci(&$num01, &$num02) {
            $somaNum01Num02 = $num01 + $num02;
            $num02 = $num01;
            $num01 = $somaNum01Num02;
        }        
    ?>
</body>
</html>