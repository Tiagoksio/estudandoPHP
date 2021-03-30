<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Decisão IF</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Estruturas de Decisão IF</h1>
    <h2>Idade para Votar</h2>
    <?php
        $anoDeNascimento = isset($_GET["ano"])?$_GET["ano"]:1900;
        $idade = date("Y") - $anoDeNascimento;
        if ($idade >= 18 && $idade <= 70) {
            echo "O ano de nascimento informado é <strong>$anoDeNascimento</strong>, você possui <strong>$idade anos</strong>.O voto para você é <strong>obrigatório</strong>";
        } elseif ($idade > 70 || $idade >= 16) {
            echo "O ano de nascimento informado é <strong>$anoDeNascimento</strong>, você possui <strong>$idade anos</strong>.O voto para você é <strong>facultativo</strong>";
        } else {
            echo "O ano de nascimento informado é <strong>$anoDeNascimento</strong>, você possui <strong>$idade anos</strong>. Você ainda <strong>não pode</strong> votar";
        }
    ?>
    <h2>Média</h2>
    <?php
        $nota01 = (float)isset($_GET["nota01"])?$_GET["nota01"]:0;
        $nota02 = (float)isset($_GET["nota02"])?$_GET["nota02"]:0;
        $media = (float)($nota01 + $nota02) / 2;
        echo "Sua primeira nota foi: $nota01;<br>
              Sua Segunda nota foi: $nota02;<br>
              Sua média é: $media<br>";
        if ($media >= 7 && $media <= 10) {
            echo "Situação: APROVADO.";
        } elseif ($media >= 5 && $media < 7) {
            echo "Situação: RECUPERAÇÃO.";
        } elseif ($media >= 0 && $media < 5) {
            echo "Situação: REPROVADO.";
        } else {
            echo "Os valores informados são inválidos. Verifique se as notas informadas estão entre 0 e 10";
        }

    ?>
    <a href="estruturasDeDecisaoIf.html">Voltar</a>
</div>
</body>
</html>