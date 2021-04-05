<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declarando visibilidade</title>
</head>
<body>
    <pre>
        <?php
            require_once "Caneta.php"; // incluir a classe
            $c1 = new Caneta;
            $c1 -> modelo = "BIC Cristal";
            $c1 -> cor = "Azul";
            /* 
            O código abaixo gera erro por interagir com atributos privado ou protegido.
            $c1 -> ponta = 0.5;
            $c1 -> carga = 90;
            */
            // Mesmo o atributo tampada sendo protegido, ele pode ser acessado pelos metodos abaixo
            $c1 -> tampar();
            $c1 -> destampar();
            $c1 -> rabiscar();            
        ?>
    </pre>
</body>
</html>