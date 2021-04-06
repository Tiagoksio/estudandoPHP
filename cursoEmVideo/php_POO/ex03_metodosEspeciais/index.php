<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
</head>
<body>
    <h1>Métodos especiais</h1>
    <h2>Método modificador - SETTER</h2>
    <pre>
        <?php
            require_once "Caneta.php";
            $c1 = new Caneta("asd", "verde", 0.5);
            $c1 -> setModelo("BIC");
            $c1 -> setCor("Azul");
            $c1 -> setPonta(0.5);
            print_r($c1);
            //Como o modelo foi declarado público, ele pode ser alterado diretamente sem o método, porém o atributo ponta é privado, por isso deve ser alterado utilizando o método setPonta.
        ?>
    </pre>
    <h2>Método Acessor - GETTER</h2>
    <?php
        print "Eu tenho uma caneta de {$c1 -> modelo} e de ponta {$c1 -> getPonta()}";
        //Da mesma forma, o método get é necessário para acessar o atributo ponta;
    ?>
    <h2>Método Construtor = CONSTRUCT</h2>
    <P>Define atributos e estados de um objeto durante o seu instanciamente fazendo atribuições e chamadas de métodos</P>
    <p>pode ser definido com um nome livre depois de dois underlines: <strong>"__construct"</strong> ou com o nome da própria classe, no caso <strong>"Caneta"</strong></p>
    <pre>
    <code>
public function __construct() {
    $this -> cor = "Azul";
    $this -> tampar();
}
public function tampar() {
    $this -> tampada = true;
}    
    </code>
    </pre>
    <?php
        print "A cor da caneta é {$c1 -> getCor()} e está {$c1 -> getTampada()}";
        //Da mesma forma, o método get é necessário para acessar o atributo ponta;
    ?>
    <p>Criamos então uma segunda caneta através do método construtor</p>
    <?php
        $caneta02 = new Caneta("BIC", "vermelha", 1.0);
        print "<strong>A cor da caneta é {$caneta02 -> getCor()}, está {$caneta02 -> getTampada()} e possui ponta {$caneta02 -> getPonta()}</strong>";
        //Da mesma forma, o método get é necessário para acessar o atributo ponta;
    ?>
</body>
</html>