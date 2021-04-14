<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <pre>
        <?php
            require_once "Pessoa.php";
            require_once "Aluno.php";
            require_once "Professor.php";
            require_once "Funcionario.php";
            //Programa Principal

            $p[0] = new Pessoa();
            $p[1] = new Aluno();
            $p[2] = new Professor();
            $p[3] = new Funcionario();

            $p[0] -> setNome("Pedro");
            $p[1] -> setNome("Maria");
            $p[2] -> setNome("Cláudio");
            $p[3] -> setNome("Fabiada");
            
            $p[1] -> setCurso("Informática");
            $p[2] -> setSalario(2500.75);
            $p[3] -> setSetor("Estoque");
            
            $p[2] -> receberAum(550.20);
            $p[3] -> mudarTrabalho();
            $p[1] -> cancelarMatr();
            
            
            print_r($p);

        ?>
    </pre>
</body>
</html>
