<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
    <h1>Operadores em PHP</h1>
    <h2>Aritiméticos</h2>
    <?php
        $n1 = 3;
        $n2 = 2;
        echo "<strong>&dollar;n1 = 3; <br>&dollar;n2 = 2;</strong>";
        echo "<br>A soma vale: ". ($n1 + $n2);
        echo "<br> A subtração vale: ".($n1 - $n2);
        echo "<br> A multiplicação vale: ".($n1 * $n2);
        echo "<br> A divisão vale: ".($n1 / $n2);
        echo "<br> O módulo vale: ".($n1 % $n2);
        echo"<br><em>obs: A ordem de precedência é a mesma utilizada na matemática: (), */%, +.</em><hr>";
    ?>
    <h2>Coletar dados da URL</h2>
    <p>http://localhost/estudandoPHP/aula05_operadores/operadores.php <strong>?a=3&b=2</strong></p>
    <p><strong>?a=3&b=2 -></strong>Os parâmetros a e b recebem os valores 3 e 2.<br>As variáveis valor1 e valor2 recebem os valores através dos parâmetros</p>    
    <?php
    $valor1 = $_GET["a"];
    $valor2 = $_GET["b"];
    echo "Valores coletados: $valor1 e $valor2";    
    ?>
    </div>
</body>
</html>
