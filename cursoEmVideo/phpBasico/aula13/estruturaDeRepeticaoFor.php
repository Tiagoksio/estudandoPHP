<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição For</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Estrutura de Repetição For</h1>
    <h2>Exercício - Tabuada utilizando For</h2>
    <form action="estruturaDeRepeticaoForSaida.php" method="get">
        <select name="numTab">
            <?php
                for ($i=1; $i <= 10; $i++) {    
                    echo "<option value=".$i.">$i</option>";
                }            
            ?>
        </select>        
        <input type="submit" value="Gerar">
    </form>
</div>
</body>
</html>
 