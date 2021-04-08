<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
        require_once 'ControleRemoto.php';
        $controle = new ControleRemoto();
        $controle -> ligar();
        $controle -> abrirMenu();

        $controle -> maisVolume();
        $controle -> maisVolume();
        $controle -> maisVolume();
        $controle -> maisVolume();
        $controle -> abrirMenu();

        $controle -> ligarMudo();
        $controle -> abrirMenu();

        $controle -> desligarMudo();
        $controle -> abrirMenu();

        $controle -> play();
        $controle -> abrirMenu();

        $controle -> desligar();
        $controle -> abrirMenu();
    ?>
</body>
</html>
