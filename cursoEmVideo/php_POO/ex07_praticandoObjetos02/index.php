<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";
        //Pessoas
        $pessoa[0] = new Pessoa("Marcos", 27, "M");
        $pessoa[1] = new Pessoa("Ana", 22, "F");
        //Livros
        $livro[0] = new Livro("O hobbit", "J.R.R.Tolkien", 322, $pessoa[0]);
        $livro[1] = new Livro("Eu, Robô", "Isaac Asimov", 253, $pessoa[1]);
        print_r($pessoa);
        print_r($livro);
        $livro[0] -> folhear(100);
        $livro[0] -> avancarPag();
        $livro[1] -> folhear(400);
        $livro[0] -> detalhes();
        $livro[1] -> detalhes();
    ?>
    </pre>
</body>
</html>
