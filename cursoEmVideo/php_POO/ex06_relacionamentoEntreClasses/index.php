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
    $campeoes = array();
    $campeoes[] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
    $campeoes[] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $campeoes[] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
    $campeoes[] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $campeoes[] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $campeoes[] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);
    print_r($campeoes);

    $campeoes[3] -> apresentar();
    ?>
    </pre>
</body>
</html>