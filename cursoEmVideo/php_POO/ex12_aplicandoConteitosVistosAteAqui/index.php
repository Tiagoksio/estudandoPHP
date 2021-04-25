<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Vídeo Youtube</title>
</head>
<body>
    <h1>Aplicando Conceitos Vistos até Aqui</h1>
    <pre>
    <?php
        require_once "Video.php";
        require_once "Gafanhoto.php";
        require_once "Visualizacao.php";
        $v[0] = new Video("Aula 01 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 15 de HTML5");
        print_r($v);
        $g[0] = new Gafanhoto("Jubileu", 27, "M", 123456);
        $g[1] = new Gafanhoto("Ana", 22, "F", 654321);
        print_r($g);
        $vis[0] = new Visualizacao($g[0], $v[2]);//Jubileu assiste Aula 15 de HTML5
        $vis[0] -> avaliarNota(7);
        print_r($vis);
        $vis[0] = new Visualizacao($g[0], $v[1]);//Jubileu assiste Aula 12 de PHP
        $vis[0] -> avaliar();
        print_r($vis);
        $vis[0] = new Visualizacao($g[1], $v[1]);//Jubileu assiste Aula 12 de PHP
        $vis[0] -> avaliarPorcentagem(8);
        print_r($vis)
    ?>
    </pre>
</body>
</html>