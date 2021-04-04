<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno Média</title>
    <style>
        input {
            margin: 5px;
        }
        table {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td, tr {
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <h1>Aluno Média</h1>
    <p>Exercício que exemplifica o uso de vetores armazenando notas e tirando a média</p>
    <hr>
    <h2>Cadastro de Notas</h2>
    <form action="cadastroDeNotas.php" method="get">
        <fieldset><legend>Dados do Aluno</legend>
            <label for="iNome">Nome: </label><input type="text" name="nome" id="iNome"><br>
            <label for="iNota01">Nota 01: </label><input type="number" name="nota01" id="iNota01"><br>
            <label for="iNota02">Nota 02: </label><input type="number" name="nota02" id="iNota02"><br>
            <label for="iNota03">Nota 03: </label><input type="number" name="nota03" id="iNota03"><br>
            <label for="iNota04">Nota 04: </label><input type="number" name="nota04" id="iNota04"><br>
        </fieldset>
        <input type="submit" value="Cadastrar">
    </form>
    <hr>
    <?php
        $aluno = array("nome" => $_GET['nome'],
                        "nota01" => $_GET['nota01'],
                        "nota02" => $_GET['nota02'],
                        "nota03" => $_GET['nota03'],
                        "nota04" => $_GET['nota04']);
        $media = ($aluno[nota01] + $aluno[nota02] + $aluno[nota03] + $aluno[nota04])/4;
        $aluno["media"] = $media;
    ?>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nota 01</th>
                <th>Nota 02</th>
                <th>Nota 03</th>
                <th>Nota 04</th>
                <th>Média</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo"$aluno[nome]";?></td>
                <td><?php echo"$aluno[nota01]";?></td>
                <td><?php echo"$aluno[nota02]";?></td>
                <td><?php echo"$aluno[nota03]";?></td>
                <td><?php echo"$aluno[nota04]";?></td>
                <td><?php echo"$aluno[media]";?></td>
            </tr>
        </tbody>
    </table>
    <?php
                
    ?>
</body>
</html>
