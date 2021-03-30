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
    <h2>Região por estado</h2>
    <?php
        $estado = isset($_GET["estado"])?$_GET["estado"]:0;
        switch ($estado) {
            case 'rs':
            case 'sc':
            case 'pn':
                echo "Você vive na região <strong>Sul</strong>";
                break;
            case 'sp':
            case 'rj':
            case 'es':
            case 'mg':
                echo "Você vive na região <strong>Suldeste</strong>";
                break;
            case 'df':
            case 'go':
            case 'ms':
            case 'mt':
                echo "Você vive na região <strong>Centro-Oeste</strong>";
                break;
            case 'ac':
            case 'ro':
            case 'rr':
            case 'to':
            case 'ap':
            case 'pa':
            case 'am':
                echo "Você vive na região <strong>Norte</strong>";
                break;
            case 'ma':
            case 'pi':
            case 'ce':
            case 'rn':
            case 'pe':
            case 'pb':
            case 'se':
            case 'al':
            case 'ba':
                echo "Você vive na região <strong>Nordeste</strong>";
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