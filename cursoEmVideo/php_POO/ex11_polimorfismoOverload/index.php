<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo Overload</title>
</head>
<body>
    <!-- PHP não suporta sobrecarga, nem mesmo trabalha com tipagem explicita. Uma solução para o problema é utilizar métodos distintos com nomes parecidos -->
<pre>
<?php
    require_once "Cachorro.php";
    $animais = array();
    $animais["M"] = new Mamifero();
    $animais["L"] = new Lobo();
    $animais["C"] = new Cachorro();
    print_r($animais);
    $animais["M"] -> emitirSom();
    $animais["L"] -> emitirSom();
    $animais["C"] -> emitirSom();
    $animais["C"] -> reagirFrase("olá");
    $animais["C"] -> reagirHora(5);
    $animais["C"] -> reagirDono(true);
?>
</pre>
</body>
</html>