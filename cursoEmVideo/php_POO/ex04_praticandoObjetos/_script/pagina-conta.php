<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página da Conta</title>
    <link rel="stylesheet" href="../_estilo/style.css">
</head>
<body>
    <section>
        <?php
            require_once "../_Classes/Conta.php";
            
            $nome = isset($_POST['nome'])?$_POST['nome']:"erro";
            $tipo = isset($_POST['tipo'])?$_POST['tipo']:"erro";
            $numConta = isset($_POST['numConta'])?$_POST['numConta']:"erro";
            if ($nome == "erro" || $tipo == "erro" || $senha == "erro") {
                echo "<h2 style='color:red;'>Dados inválidos</h2>";
            } else {
                $cliente = new Conta($nome, $numConta, $tipo);
                echo "Titular: {$cliente -> getTitular()}<br>";
                echo "Saldo atual: {$cliente -> getSaldo()}<br>";
                echo "Conta: {$cliente -> getNumConta()} {$cliente -> getTipo()} <br>";
                echo "Saldo após depositar R$100,00: "."R$".number_format($cliente -> deposito(100),2,",",".")."<br>" ;
                echo "Saldo após sacar R$50,00: "."R$".number_format($cliente -> saque(50),2,",",".");
            }
        ?>
    </section>
</body>
</html>
