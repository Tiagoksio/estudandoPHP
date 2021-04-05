<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis PHP</title>
</head>
<body>
    <h1>Variáveis em PHP</h1>
    <h2>Tipos e Declaração</h2>
    <p>As variáveis em PHP são declaradas da seguinte forma</p>
    <ul>
        <li>Devem começar com uma letra, após o "$"</li>
        <li>Podem conter letras e números</li>
        <li>Não podem conter caracteres acentuados</li>
        <li>Não podem conter símbolos como %, #, * & etc, exceto _ e $</li>
        <li>A linguagem é case sensitive, por isso é recomendado utilizar identificados com <strong>letras minúsculas</strong></li>
    </ul>
    <p>Apesar do PHP não atribuir tipos diretamente à variável, os tipos existem, mas são atribuidos por <strong>coerção</strong> ou através do <strong>typecast</strong>, que força um tipo primitivo como:</p>
    <ul>
        <li>inteiro - (int), (integer)</li>
        <li>real - (float), (double)</li>
        <li>caractere - (string)</li>
        <li>booleano - Não exite typecast, é considerado verdadeiro o valor 1 e '' o valor falso</li>
    </ul>
    <h2>Atribuição</h2>
    <?php
        $idade = 15;
        $salario = 1500.25;
        $nome = 'Tiago';
        $solteiro = true;
        echo "&dollar;nome = $nome<br>&dollar;idade = $idade<br>&dollar;salario = $salario<br>&dollar;solteiro = $solteiro"
    ?>
    <h2>Atribuição com Typecast</h2>
    <?php
        $idade = (int)15;
        $salario = (float)1500.25;
        $nome = (string)"Tiago";
        echo "&dollar;nome = (string) '$nome'<br>&dollar;idade = (int)$idade<br>&dollar;salario = (float)$salario"
    ?>
    <p>Se o comando <em>echo</em> for escrito entre áspas simples, será lido como texto; para que possa ser lido com iterpolação deve-se utilizar áspas duplas</p> 
    <h2>Concatenação</h2>
    <p>Para concatenar em php, basta utilizar o ponto '.':</p>
    <?php
    echo "<em>" . $nome . " tem " . $idade . " anos </em>";
    ?>
    
</body>
</html>