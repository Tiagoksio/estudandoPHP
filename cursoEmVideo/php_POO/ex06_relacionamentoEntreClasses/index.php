<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacionamento entre Classes</title>
</head>
<body>
    <h1>UEF</h1>
    <p>Exercício que visa representar o relaciomento entre classes através de um torneio de luta</p>
    <pre>
    <?php
    require_once "Lutador.php";
    require_once "Luta.php";
    $campeoes = array();
    $campeoes[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
    $campeoes[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $campeoes[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $campeoes[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $campeoes[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $campeoes[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
    
    $UEC01 = new Luta();
    $UEC01 -> marcarLuta($campeoes[2], $campeoes[5]);
    $UEC01 -> lutar();
    $campeoes[2] -> status();
    echo "\n";
    $campeoes[5] -> status();

    ?>
    </pre>
</body>
</html>
