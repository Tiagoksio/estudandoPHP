<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <h1>Rotinas em PHP</h1>
    <h2>Rotinas sem retorno</h2>
    <p>São rotinas executadas ao serem chamadas e possuem seu fim em sí, de certa forma</p>
    <pre>
        <code>
function somaSemRetorno($a, $b) {
    $s = $a + $b;
    echo $s;
}
somaSemRetorno(3, 4);
        </code>
    </pre>
    <?php
        somaSemRetorno(3, 4);
        function somaSemRetorno($a, $b) {
            $s = $a + $b;
            echo "soma: $s";
        }
    ?>
    <h2>Rotinas com retorno</h2>
    <p>São rotinas executadas com retorno, então seu valor será atribuido ao sair do bloco</p>
    <pre>
        <code>
function somaComRetorno($a, $b) {
    $s = $a + $b;
    return $s;
}
$soma = somaComRetorno(3, 4);
        </code>
    </pre>
    <?php
        function somaComRetorno($a, $b) {
            $s = $a + $b;
            return $s;
        }
        $soma = somaComRetorno(3, 4);
        echo "Soma: $soma";
    ?>
    <h2>Rotinas com múltiplos argumentos</h2>
    <p>Utilizamos quando não sabemos a quantidade de argumentos que serão passadas</p>
    <pre>
        <code>
function somaComMultArg() {
	$parametros = func_get_args(); 
	$totArgs = func_num_args();
	$soma = 0;
	for($i=0;$i<$totArgs;$i++) {
        $soma += $parametros[$i];
	}
	return $soma;
}
$res = somaComMultArg(3,4,8,1,2);
        </code>
    </pre>
    <?php
    function somaComMultArg() {
	    $parametros = func_get_args(); //$parametros = [3,4,8,1,2]
	    $totArgs = func_num_args(); //$totArgs = 5
	    $soma = 0;
	    for($i=0;$i<$totArgs;$i++) {
		    $soma += $parametros[$i];
	    }
	    return $soma;
    }
    $res = somaComMultArg(3,4,8,1,2);
    echo "Soma de múltiplos argumentos $res"
    ?>
    <h2>Rotinas com passagem de parâmetro por referência</h2>
    <p>Se no primeiro exemplo, caso passamos em vez de valores numericos os valores através de uma variável, o valor da variável não é afetado pelo parâmetro que recebe o valor</p>
    <p>Para que a variável de origem seja alterada, devemos passar o endereço da variável como parâmetro</p>
    <pre>
        <code>
function teste(&$x) {
    $x += 2;
    echo $x;
}
$a = 3;
teste($a);
//$x valerá 5 e $x valerá 5 também;
        </code>
    </pre>
    <?php
        function teste(&$x)
        {
            $x += 2;
            echo "Variável local &dollar;x = $x<br>";
        }
        $a = 3;
        teste($a);
        echo "Variável global &dollar;a = $a<br>";
    ?>
</div>
</body>
</html>