<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança 02</title>
</head>
<body>
<pre>
    <?php
        //Herança de Implementação 
        require_once "Visitante.php";
        require_once "Bolsista.php";
        $visit1 = new Visitante();
        $visit1 -> setSexo("M");
        $visit1 -> setNome("Tiago");
        $visit1 -> setIdade("27");
        print_r($visit1);
        //Herança para diferença
        $aluno01 = new Aluno();
        $aluno01 -> setNome("Pedro");
        $aluno01 -> setMatricula(123456);
        $aluno01 -> setIdade(16);
        $aluno01 -> setSexo("M");
        $aluno01 -> setCurso("Informática");
        $aluno01 -> pagarMensalidade();
        print_r($aluno01);
        //Especificação da classe Aluno com sobreposição do método "pagarMensalidade".
        $bolsista01 = new Bolsista();
        $bolsista01 -> setNome("Miguel");
        $bolsista01 -> setMatricula(000012);
        $bolsista01 -> setIdade(15);
        $bolsista01 -> setSexo("M");
        $bolsista01 -> setCurso("Administração");
        $bolsista01 -> setBolsa(0.55);
        $bolsista01 -> pagarMensalidade();
        $bolsista01 -> renovarBolsa();
        print_r($bolsista01);


    ?>
</pre>
</body>
</html>