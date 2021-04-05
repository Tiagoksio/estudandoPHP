<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Decisão Switch</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Estrutura de Decisão Switch</h1>
   
    <h2>Quadrado, Cubo ou Raíz</h2>
    <?php
        $numero = isset($_GET["numero"])?$_GET["numero"]:0;
        $operacao = isset($_GET["operacao"])?$_GET["operacao"]:"erro";
        switch ($operacao) {
            case 'quadrado':
                echo "o número $numero<sup>2</sup> é ".pow($numero, 2);
                break;
            case 'cubo':
                echo "o número $numero<sup>3</sup> é ".pow($numero, 3);
                break;
            case 'raiz':
                echo "A raíz quadrada de $numero é ".sqrt($numero);
                break;
            default:
                echo "Operação inválida";
                break;
        }
    ?>
    <h2>Dia da semana</h2>
    <?php
    $diaDaSemana = isset($_GET["dia"])?$_GET["dia"]:0;
    switch ($diaDaSemana) {
        case 1:
        case 7:
            echo "Fim de Semana!";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Dia de ir trabalhar.";
            break;
        default:
            echo "Valor inválido";
            break;
    }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a><!-- Voltar para a página anterior. Código em javaScript --> 
</div>
</body>
</html>