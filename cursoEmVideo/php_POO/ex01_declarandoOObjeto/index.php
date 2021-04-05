<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declarando Objeto</title>
</head>
<body>
    <?php
        require_once "Caneta.php"; // incluir a classe
        $c1 = new Caneta; //instanciar um novo objeto
        $c1->cor = "azul";
        $c1->ponta = "0.5";
        $c1->tampada = false;
        $c1->tampar();
        print_r($c1);
        $c1->rabiscar();
        $c1->tampar();
        $c1->destampar();
        $c1->rabiscar();
        //var_dump($c1); //É uma das formas de mostrar o objeto detalhadamente
        print_r($c1);
        //Podemos criar várias canetas a partir da classe Caneta
        
    ?>
</body>
</html>