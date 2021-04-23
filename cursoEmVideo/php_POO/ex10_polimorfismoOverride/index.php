<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Override</title>
</head>
<body>
<pre>
<?php
    require_once "Ave.php";
    require_once "Mamifero.php";
    require_once "Peixe.php";
    require_once "Reptil.php";

    $animal["m"] = new Mamifero();
    $animal["r"] = new Reptil();
    $animal["p"] = new Peixe();
    $animal["a"] = new Ave();
    print_r($animal);
    $animal["m"] -> setPeso(85.3);
    $animal["m"] -> setIdade(2);
    $animal["m"] -> setMembros(4);
    $animal["m"] -> locomover();
    $animal["m"] -> alimentar();
    $animal["m"] -> emitirSom();
    print_r($animal);
    $animal["p"] -> setPeso(0.35);
    $animal["p"] -> setIdade(1);
    $animal["p"] -> setMembros(0);
    $animal["p"] -> locomover();
    $animal["p"] -> alimentar();
    $animal["p"] -> emitirSom();
    $animal["p"] -> soltarBolha();
    print_r($animal);
    $animal["a"] -> setPeso(0.89);
    $animal["a"] -> setIdade(2);
    $animal["a"] -> setMembros(2);
    $animal["a"] -> locomover();
    $animal["a"] -> alimentar();
    $animal["a"] -> emitirSom();
    $animal["a"] -> fazerNinho();


?>
</pre>    
</body>
</html>