# Curso de PhP

PHP é um acrônimo recursivo para (**P**hp **H**yperText **P**reprocessor), é uma linguagem de script open source de uso geral, utilizada em desenvolvimento web back-end

Criado em 1995, por Rasmus Lerdorf, o PHP ( acrônimo para PHP: Hypertext Preprocessor) é uma linguagem de script Open Source de uso geral. Com ela, desenvolvedores podem criar sites dinâmicos, extensões para aplicativos e otimizar tanto programas quanto Sistemas Operacionais. Ela é especialmente adequada para o desenvolvimento web e pode ser embutida dentro do HTML.

- Baseada em script;
- Server Side;
- Requests/Responses;
- Interpretado (≠ de compilado) interpreta o script;
- Multi Paradigma;
    - Procedural
    - POO
    - Funcional

É matido pela zend

Curiosidade php - Seu mascote é um elefante porque a sigla php parece um elefante 🐘

# Ecossistema php

CMS - Content Management System (Wordpress, magento, drupal, october) - ferramentas para construção de sites, de conteúdo para internet como e-commerce, blogs, sites, etc.

Frameworks - (Symfony, Zend, Laravel, Cake, Phalcon )

Pacotes - XAMPP ou LAMPP 

- X → Qualquer **Os** enquanto também temos: **L**inux, **M**ac e **W**indows, para LAMP, MAMP e WAMP;
- **A**pache, **M**ySQL, **P**HP e **P**erl;

Servidores Web - (Apache ou Ngnix) outro que rode o PHP obs: é possível ter tbm o com servidor embutido;

# Testando e verificando a versão do php

```jsx
phpinfo():
```

Função que retorna qual a configuração do php atual que está instalado;

---

# História do PhP

A Linguagem PHP começou em 1994, quando Rasmus Lerdorf resolveu criar um **gerenciador de visitas** para o seu site. Sua primeira criação não era uma linguagem, e sim uma **ferramenta.** Batizada de **Personal Home Page**, usava comandos simples inspirados da linguagem **PERL**. A segunda versão da ferramenta já permitia a manipulação de formulários e pequenos livros de visita: o **Personal Home Page/ Forms Interpreter,** ou **PHP/FI**. Essa versão ficou bastante popular e começou a se espalhar em 1995.

Com o objetivo de fazer sua ferramenta crescer, Rasmus liberou o acesso ao código-fonte da CGI em 1996, o que despertou o interesse de diversos programadores, entre eles os israelenses Zeev Suraski e Andi Gutmans (Zeev + Andi == Zend, a empresa que mantem o php). Esses dois reescreveram o núcleo da ferramenta e a transformou em uma **Linguagem de Scripts**, nos moldes em que nós temos o **PHP atualmente**. A partir de 1998, o PHP já começava a se destacar como uma das linguagens mais utilizadas na Internet. Foi nessa época que a linguagem foi rebatizada e passou a se chamar **PHP: Hypertext Preprocessor** e chegou à sua versão 3.0, com muitas funcionalidades interessantes.

Em 2000, a quarta versão do PHP surge para eliminar a maioria dos erros e falhas de segurança encontrados pela comunidade. Enquanto isso, Zeev e Andi resolveram reescrever todo o núcleo da linguagem, abandonando quase que completamente o projeto original de Rasmus Lerdorf. Quatro anos depois, em 2004, surge o PHP5 que ficou mundialmente conhecido e atualmente conta com 32 versões internas, com mais de 1000 correções de falhas de segurança.

# Como Funciona o PHP

Como funciona o PHP? Como transformar meu computador em um servidor? Como funciona tecnologias server-side? Qual é a diferença entre tecnologias PHP, ASP, JSP e etc? A segunda aula do seu Curso de PHP do Curso em Vídeo vai responder a essas e muitas outras perguntas que normalmente são feitas por quem está iniciando seus estudos em PHP.

A infra-estrutura da Internet é baseada no modelo cliente x servidor. A Internet interliga clientes a servidores que possuem arquivos e fornecem cópias desses documentos.

Nas tecnologias client-side, a função do servidor é apenas fornecer arquivos que o cliente solicita. Quem vai ter mais trabalho de processamento é o lado do cliente (client-side) que terá seu navegador trabalhando para interpretar os códigos e arquivos enviados pelo server. São exemplos de tecnologias client-side: HTML, CSS, JavaScript e Flash.

Já nas tecnologias server-side, o servidor vai assumir a maior parte do trabalho, já que existe a interpretação de códigos do lado do servidor (server-side), que no caso do PHP são chamados scripts de servidor.

Para o PHP funcionar corretamente, o servidor precisa ter o Apache, que é um program server, um interpretador PHP (engine) e suporte a um ou mais tipos de banco de dados (geralmente MySQL).

Para transformar seu computador em um servidor com suporte PHP, você precisa de um sistema AMP (Apache + MySQL + PHP). Para usar PHP no Windows, instalamos um sistema **WAMP**. Para usar PHP no Linux, instalamos um sistema **LAMP**. Para usar PHP no Mac, instalamos um sistema **MAMP**.

# Instalação do PHP

```bash
sudo apt update e upgrade
```

```bash
sudo apt install lamp-server^
```

```bash
chmod -R 777 /var/www/
```

```php
<?php
	echo "Olá, mundo!"
	//phpinfo();
?>
```

# Variáveis

Como criar variáveis em PHP? Como declarar variáveis em PHP? Quais são os tipos primitivos do PHP? Como realizar conversões em PHP? A resposta para essas e muitas outras perguntas você vai ter nessa quarta aula do Curso Grátis de PHP para Iniciantes.

Antes de mais nada, é importante que você entenda os conceitos de variáveis em Algoritmos e saiba utilizá-las corretamente. Nós temos uma aula no Curso Grátis de Algoritmos que fala sobre variáveis, assista esse vídeo antes de prosseguir com essa aula, caso você não esteja familiarizado com esse conceito.

Comandos de saída do PHP:

Os comandos **ECHO**, **PRINT** e **PRINTF** servem para gerar saídas na tela. Um exemplo simples desse comando é:

```php
echo “Estou aprendendo variáveis em PHP”;
```

A pronúncia correta do comando echo é ECO (aquele som que se repete quando gritamos dentro de cavernas, lembra?).

Note que no comando acima, foi utilizada uma tag HTML para a quebra de linha. Isso é possível, já que o PHP se integra com essa tecnologia. Fique à vontade para utilizar tags de marcação hipertexto dentro dos seus comandos de saída em PHP.

Usando variáveis

Variáveis são espaços na memória do computador que podem conter valores. Variáveis simples armazenam apenas um valor de cada vez, dependendo do seu tipo.

Todas as variáveis no PHP possuem um $ na frente e seguem as mesmas regras de construção de nomes de identificadores:

- Devem começar com uma letra (após o **$**)
- Podem conter letras e números
- Não podem conter caracteres acentuados
- Não podem conter símbolos como % # * & etc (exceto _ e $)

OBS: O PHP faz a diferenciação entre as letras maiúsculas e minúsculas, por isso recomendamos que você utilize apenas identificadores com **letras minúsculas** em seus scripts PHP.

Declaração de variáveis

No PHP não existe a necessidade de declarar variáveis. Os tipos serão atribuídos automaticamente de acordo com o valor que a variável receber. Esse processo é conhecido como coerção. Isso pode ser até empolgante no início, mas é preciso prestar bastante atenção para não fazer nada errado.

Você pode forçar um **tipo primitivo** a uma variável por **TYPECAST**, utilizando (int) (real) (**float**) (**double**) (**string**) antes do valor na atribuição.

**Não existe typecast para variáveis lógicas**. Os valores booleanos são considerados **números**, sendo o valor 1 atribuído para true e vazio para false.

Atribuição de valores

Atribuir valor é colocar um conteúdo em uma variável. Utilizamos o operador de atribuição = para realizar essa tarefa. Veja alguns exemplos:

- $idade = 15;
- $salario = 1500.25;
- $nome = “Gustavo”;
- $casado = true;

Concatenação de valores

Concatenar é juntar valores para tratá-los em conjunto. A concatenação em PHP é realizada pelo operador ponto (**.**) como no trecho de código a seguir.

- $idade = 18;
- $nome = “Maria”;
- echo $nome . “ tem “ . $idade . “ anos “;

No script acima, será exibido “Maria tem 18 anos”, já que acontecerão concatenações.

Porém, já que os identificadores PHP começam com um $, é possível realizar o comando de saída utilizando um modo simplificado:

```php
echo “$nome tem $idade anos”; 
```

O comando acima pode ser usado sem problemas, contanto que sejam utilizadas aspas duplas.

```php
<?php
    $idade = 15;
    $salario = 1500.25;
    $nome = "Tiago";
    $solteiro = true;
    echo "&dollar;nome: $nome<br>&dollar;idade: $idade<br>&dollar;salario: $salario<br>&dollar;solteiro: $solteiro"
 ?>
```

# Operadores Aritméticos

Como fazer contas no PHP? Como realizar somas, multiplicações e mais? Exponenciações em PHP? Raiz quadrada em PHP? Os operadores aritméticos do PHP são:

- + é o operador de adição
- – é o operador de subtração
- '*'é o operador de multiplicação
- o '/' é o operador de divisão Real
- '%' é o operador de módulo (resto da divisão)

## O código a seguir, vai somar dois números:

```php
$n1 = 3; 
$n2 = 2; 
$s = $n1 + $n2;
echo "A soma vale $s";
```

O código acima vai mostrar na tela a mensagem

A soma entre 3 e 2 é igual a 5

Outra coisa importante a saber é a ordem de precedência de operadores aritméticos em PHP. Sempre em uma expressão, os operadores que serão executados são, na ordem:

- Em primeiro lugar, parênteses ( )
- Em segundo lugar, operadores de multiplicação, divisão e módulo * / %
- Em seguida, as adições e subtrações + –

Por exemplo, considerando o código a seguir:

```php
$media = $nota1 + $nota2 / 2;
```

A média será calculada de maneira errada, já que segundo a ordem de precedência, a divisão será feita antes. O correto seria escrever:

```php
$media = ($nota1 + $nota2) / 2;
```

Note que o uso dos parênteses muda bastante as coisas.

## Obtendo valores da URL com PHP

Vamos analisar a URL abaixo:

http://localhost/aula05/operadores.php?a=3&b=2

No link acima, o arquivo operadores.php está sendo chamado dentro da pasta aula05 do servidor local. Na linha, serão passados dois valores: a valendo 3 e b valendo 2.

Para pegar esses valores no script PHP, use o código

```php
$valor1 = $_GET[“a”];
```

```php
$valor2 = $_GET[“b”];
```

No código acima, o parâmetro a (3) passado pela URL será armazenado na variável $valor1. De maneira similar, a variável $valor2 vai conter o valor do parâmetro b (2).

## Obs: use sempre $_GET com todas as letras maiúsculas.

## Funções Matemáticas em PHP

- **abs()** : Retorna o valor absoluto de um número.

    Ex: abs(-5) = 5

- **pow()** : Calcula uma potência

    Ex: pow(3,2) = 32 = 9

- **sqrt()** : Calcula a raiz quadrada de um número.

    Ex: sqrt(25) = 5

- **round()** : Arredonda valores.

    Ex: round(3.8) = 4

- **intval()** : Trunca um número.

    Retorna a parte inteira de um valor.

    Ex: abs(8.7) = 8

- **number_format()** : Formata um número Real.

    Ex: number_format(3258.754, 2, “,”, “.”) = 3.258. 75.

Obs: Ainda existem os métodos ceil() e floor() para arredondamentos para cima e para baixo, respectivamente. A função round() vai usar as regras de arredondamento.

# Operadores de Atribuição

Uma atribuição acontece quando queremos colocar algum valor dentro de uma variável, seja ele um **número** ou **string** **estática**, o resultado de uma expressão, o retorno de uma função ou o conteúdo de outra variável.

## Operadores de Atribuição do PHP

Os operadores de atribuição do PHP são **+= -= *= /= %= e .=**

**Vejamos alguns exemplos:**

```php
$c = $c + 5; $c += 5;
```

```php
$c = $c – $a; $c -= $a;
```

```php
$c = $c + 1; $c += 1;
```

Na última linha da tabela acima, você verifica a adição de apenas uma unidade na variável. Nesses casos, podemos usar os operadores de incremento.

## Operadores de Incremento ou Decremento

```php
$c = $c + 1; $c += 1; $c++;
```

Qualquer uma das formas acima é válida. De maneira similar, temos:

```php
$c = $c – 1; $c -= 1; $c–;
```

A forma de utilizar o operador de incremento/ decremento faz toda diferença se ele aparece antes ou depois da variável. Assim:

```php
$c ++ $c–
```

vão apresentar resultados diferentes de acordo com a situação. Durante a aula, vai ser explicado melhor como utilizar pré-incremento, pós-incremento, pré-decremento e pós-decremento em PHP.

## Comentários em PHP

Existem **três** **tipos** **de** **comentários** em PHP. Os comentários **inline //** **e #** transformam tudo o que está após o(s) símbolo(s) será considerado comentário.

Existe também o comentário **multiline**, que vai criar comentários que ocupem várias linhas:

```php
<?php /* Esse comentário vai ocupar várias linhas 
do seu código e todas serão ignoradas */ 
		$a += 1; // Esse é um comentário de uma linha 
		$b ++; # Esse aqui também é 
?>
```

## Variáveis Referenciadas

Colocar um caractere **&** na frente de uma variável vai criar um **ponteiro** em PHP. Ela não será uma variável de fato, mas será uma referência à variável original. Considere o código:

```php
<?php 
		$x = 3; 
		$y = $x; 
		$z = &$x; 
?>
```

A variável $x vai receber 3. A variável $y vai receber o valor que está dentro da variável $x. A variável $z vai ser uma ligação com a variável $x. Mais tarde, qualquer modificação em $y não vai alterar o valor de $x. Porém, se mudarmos o valor de $z, o valor de $x será afetado, já que existe uma relação entre as duas.

## Variáveis de Variáveis (variáveis variantes)

Colocar um segundo **$** na frente de uma variável também possui um efeito bem peculiar. Ele vai criar uma variável dinamicamente, dependendo do conteúdo da variável original. Essas são as variáveis de variáveis em PHP.

```php
<?php 
		$nome = “gustavo”; 
		$$nome = “professor”; 
?>
```

Com essas linhas, teremos uma variável $nome, como o conteúdo “gustavo” e a linha de baixo vai criar uma variável $gustavo, com o conteúdo “professor”.

# Operadores relacionais

São iguais aos da linguagem C: >,<, ==, !=, < =, > = , e o idêntico que também testa o tipo: ===, além do não idêntico igual no javaScript: ! ==.

Temos o operador ternário também:

**expressão ? verdadeiro : falso;** 

E os lógicos: !, and e &&, or e ||,  xor.

# Integração HTML5 + PHP

## Ligação formulário HTML PHP, integração HTML5 com PHP via formulário.

Por exemplo, vamos considerar um formulário que use o método GET e envie um valor V para o arquivo DADOS.PHP:

**Obs: O método GET envia dados de um formulário diretamente pela URL, enquanto o POST, por pacotes.**

Interligando o formulário HTML com o script PHP

Para interligar o formulário, vamos usar a cláusula $_GET

```php
<?php 
		$valor = $_GET[“v”]; 
		echo “Digitou $valor”; 
?>
```

Obs: O $_GET sempre vai utilizar todas as letras maiúsculas. Obs: Se por acaso seu formulário utilizar o método post, você vai precisar usar $_POST.

## Interligando outros tipos de controles de formulários HTML5 com PHP

A integração de qualquer controle de formulário PHP pode ser feita através do parâmetro **NAME** de cada um deles. Durante a aula, criamos um formulário com vários tipos de controles e interligamos eles ao arquivo PHP.

Pegando o ano atual com PHP Para obter o ano atual no PHP, utilizamos

```php
$idade = date(“Y”) – $ano;
```

## Exemplo 01:

```html
<form action="01valor.php" method="get">
        Valor: <input type="number" name="nValor">
        <input type="submit" value="Calcular Raiz">
 </form>
```

- **Action** indica para onde o **form** será enviado;
- Atributo **name** será utilizada para identificar os dados;
- Input **submit** fará a chamada para o envio

```php
<?php
     $valor = $_GET["nValor"];
     echo "A raiz quadrada de $valor é ".number_format(sqrt($valor),2);
 ?>
```

- A variável **valor** irá receber o valor do parâmetro **nValor**, definida no **name** do html;

## Exemplo 02

```html
<form action="02idade.php" method="get">
     Nome: <input type="text" name="nome"><br>
	   Ano de Nascimento: <input type="number" name="ano">
	   <fieldset><legend>Sexo</legend>
           <input type="radio" name="sexo" id="masc" value="Masculino">
           <label for="masc">Masculino</label><br>
	         <input type="radio" name="sexo" id="fem" value="Feminino">
	         <label for="fem">Feminino</label>
      </fieldset><br>
	    <input type="submit" value="Enviar">
</form>
```

```php
<?php
     //isset() verifica se o parâmetro foi configurado.
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:"[Não informado]";
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";
    $idade = date("Y") - $ano;
    echo "$nome nasceu em $ano<br>Sexo: $sexo<br>Idade: $idade";
 ?>
```

## Exemplo 03

```html
<form action="03cores.php" method="get">
     <label for="itxt">Texto: </label>
     <input type="text" name="t" id="itxt"><br>
     <label for="itam">Tamanho</label>
     <select name="tam" id="itam">
         <option value="8pt">8</option>
         <option value="10pt">10</option>
         <option value="14pt" selected>14</option>
         <option value="20pt">20</option>
         <option value="40pt">40</option>
      </select><br>
      <label for="icor">Cor: </label>
      <input type="color" name="cor" id="icor"><br>
      <input type="submit" value="Gerar">
 </form>
```

Aplicação do php em 3 areas: head, style e body:

- **head:**

```php
<head>
		<?php
		     //isset() verifica se o parâmetro foi configurado.
		     $txt = isset($_GET["t"])?$_GET["t"]:"texto generico";
		     $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
		     $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
			?>
</head>
```

- **style:**

```php
<style>
	     span.texto{
	          font-size:<?php echo $tam;?>;
            color: <?php echo $cor;?>;
       }
</style>
```

- **body:**

```php
<?php
        echo "<span class='texto'>$txt</span>";
 ?>
```

# Estrutura Condicional "if"

O PHP permite a criação de condicões. Nessa aula, veremos como utilizar a estrutura IF.

A estrutura condicional em PHP é representada da seguinte forma:

```php
if ($idade = 18) { 
		$vota = true; 
} else { 
	$vota = false; 
}
```

## Estruturas condicionais aninhadas

Quando colocamos uma condicional dentro da outra, dizemos que estamos aninhando estruturas (termo que se refere a ninho). Para aninhar blocos, utilizamos uma sintaxe semelhante à anterior:

```php
if($peso 50) { 
	$tipo = “muito magro”; 
} else { 
	if($peso =50 && $peso 70) {  
		 $tipo = “peso normal”; 
} else { 
	$tipo = “acima do peso”; 
};
```

## Simplificando estruturas condicionais aninhadas

No PHP, podemos substituir uma cláusula **else** seguida de outro **if** (como feito acima) por uma estrutura **elseif** **{}** que vai se comportar exatamente da mesma maneira, mas usará menos blocos.

```php
if ($tipo == “nacional”) {
		$imposto = 0;
} elseif ($tipo == “importado”) { 
					$imposto = 60; 
	} elseif ($tipo == “mercosul”) { 
						$imposto = 20; 
	} else { 
		$imposto = 80; 
};
```

# Estrutura Condicional "Switch"

A condição **switch - "troca"**, é utilizado para múltiplas escolhas:

```php
switch($op) {
			case 1;
					echo "a";
					break;
			case 2;
					echo "b";
					break;
			case 3;
					echo "c";
					break;
			default:
					echo "Erro";
}
```

## Casos Múltiplos

```php
<?php
    $diaDaSemana = isset($_GET["dia"])?$_GET["dia"]:0;
    switch ($diaDaSemana) {
        case 1:
        case 7:
            echo "Fim de Semana!";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Dia de ir trabalhar.";
            break;
        default:
            echo "Valor inválido";
            break;
    }
    ?>
```

# Estruturas de Repetição

## While

A Estrutura **While** (enquanto), também conhecida como Estrutura de Repetição com **Teste Lógico no início**, realiza o teste de uma expressão lógica sempre na primeira linha da estrutura. Vamos ver como realizar uma contagem progressiva de 1 até 10, utilizando a estrutura while em PHP.

```php
$c = 1; 
while ($c <= 10) { 
			echo $c; 
			$c++; 
}
```

Outra coisa que vamos aprender durante essa aula de repetição é criar código HTML dinamicamente, utilizando scripts PHP. No exemplo apresentado, vamos criar várias caixas de texto com nomes e etiquetas diferentes usando uma estrutura de repetição em PHP.

## Do While

Estrutura com teste no final

```php
$a = 1;
do {
     $a++
} while ($a <= 10);
```

## For

Estrutura de repetição, com variável de controle, quando se sabe a quantidade de loops realizados.

```php
for($c = 1; $c <= 10; $c++) {
		echo $c;
}
```

---

# Rotinas em PHP

As rotinas são um bloco executado ao ser chamado **sem retorno**:

```php
function soma($a, $b) {
		$s = $a + $b;
		echo $s;
}
soma(3, 4)
```

- **$a** e **$b** são os parâmetros e **soma(4, 5)**, a chamada da rotina.

Já as **funções** quando queremos que o bloco retorne um valor, fazemos da seguinte forma:

```php
function soma($a, $b) {
		$s = $a + $b;
		return $s;
}
$soma = soma(3, 4);
```

- **return** indica o valor que retornará do bloco da função;
- Quando a função é chamada, o valor retornado precisa ser armazenado em alguma variáveis, por isso atribuímos o valor à **soma**.

## Rotinas com múltiplos parâmetros

Utilizado quando não sabemos a quantidade de parâmetros recebidos.

```php
function soma() {
		$parametros = func_get_args(); //$parametros = [3,4,8,1,2]
		$totArgs = func_num_args(); //$totArgs = 5
		$soma = 0;
		for($i=0;$i<$totArgs;$i++) {
				$soma += $p[$i];
		}
		return $soma;
}
$res = soma(3,4,8,1,2);
```

- **func_get_args();** // Cria um array agrupando todos os parâmetros passados.
- **func_num_args();** // Cria um array com o número de argumentos passados passados

## Rotinas com passagem de parâmetro por valor

```php
function teste($x) {
	 $x += 2;
   echo $x;
}
$a = 3;
teste($a);
//$a valerá 3 e $x valerá 5;
```

- No exemplo acima, $x recebe o **valor** de $a; Porém, se efetuarmos alterações em $x, as mesmas não se aplicam à $a, para isso, utilizamos a **passagem por referência.**

## Rotinas com passagem de parâmetro por referência

```php
function teste(&$x) {
	 $x += 2;
   echo $x;
}
$a = 3;
teste($a);
//$x valerá 5 e $x valerá 5 também;
```

- No exemplo acima, o valor passado é o **endereço de memória** da variável **$a**, logo toda alteração em **$x** será atribuída à variável **$a**

## Rotinas Externas

Quando precisamos utilizar as mesmas funções em vários programas, podemos utilizar uma fonte em comum, onde declaramos a função uma única vez e então efetuamos o **include** "nomeDoArquivo.php" das funções no código que precisamos.

![Curso%20de%20PhP%201329aa0d02024264b49ff0b2f2f7db9c/Captura_de_tela_de_2021-03-31_22-16-07.png](Curso%20de%20PhP%201329aa0d02024264b49ff0b2f2f7db9c/Captura_de_tela_de_2021-03-31_22-16-07.png)

Além do **include**, temos o **require**. As duas diretivas tem a mesma função, incluir um arquivo, porém o include carrega o resto do arquivo caso o **include** não seja carregado, se possível. Já o **require** para o programa ao perceber que a inclusão não foi atendida.

Temos também duas variações desses comandos: **include_once**, **require_once.** Essas variações ocorrem para que a inclusão não seja feita várias vezes; se já foi incluída, não incluir novamente; se não, incluir pela primeira vez.

# Funções String em PHP

Nessa aula, veremos uma lista de funções para Strings usando PHP. São funções internas que já existem na linguagem. A lista de funções de manipulação de Strings que serão vistas nessa aula é composta pelas instruções:

- Função **printf()** : Permite exibir uma string com itens formatados. 
**OBS**:number_format() utilizado para formatar um número, o printf() já imprime formatado.
Os valores aceitos são:
    - %(letra) →d para decimal, assim como i para inteiros, f para float, s para string, u para decimal unsined(positivos apenas), x para hexa, o para octa...

```php
<?php
$produto = "leite";
$preco = 4.5;
printf("O %s está custando R$%.2f", $produto, $preco);
?>
```

- Função **print_r()** : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada.
    - Essa pode ser substituída por **var_dump($x);** e **var_export($x);**

```php
<?php
$v[0] = 4;
$v[1] = 8;
$v[2] = 3;
print_r($v);
//saida: Array([0] => 4 [1] => 8 [2] => 3)
//O símbolo "=>" significa associação.
$v2 = array (3,7,6,2,1,9);
print_r($v2);
?>
```

- Função **wordwrap()** : Cria quebras de linha ou divisões em uma string em um tamanho especificado.

```php
<?php
$txt = "Este é um exemplo de string gigante que...";
$res = wordwrap($txt, 20, "<br>\n", false);
echo($res)
//parametros: variável, quantos caracteres vai gerar a quebra, tipo de quebra
//true para quebra na palavra e false para manter a palavra inteira
?>
```

- Função **strlen()** : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco).

```php
<?php
$txt = "Curso em Vídeo";
$tamanho = strlen($txt);
//$tamanho == 14, que é o tamanho da string
?>
```

- Função **trim()** : Elimina espaços em branco antes e depois de uma string.
**OBS:** Muito útil para limpar os espaços por inputs de forms

```php
<?php
$nome = "   José da Silva   ";
echo(strlen($nome)); // Irá imprimir 19, por conta dos espaços.
$novo = trim($nome);
echo(strlen($novo));// Irá imprimir 13, preservando os espaços entre as palavras.
?>
```

- Função **ltrim()** : Elimina espaços no início de uma string.
- Função **rtrim()** : Elimina espaços em branco no final de uma string.
- Função **str_word_count()** : Conta quantas palavras uma string possui.

```php
<?php
$frase = "Eu vou estudar PHP agora";
$cont = str_word_count($frase, 0);
echo $cont; 
// Como o parâmetro 0 foi passado, a função irá simplesmente contar as palavras; 
//O valor 1 irá armazenar no vetor cada palavra em um vetor.
//O valor 2 irá armazenar a frase em um vetor com índice na posição que inicia cada palavra
?>
```

- Função **explode()** : Quebra uma string e coloca os itens em um vetor.

```php
<?php
$site = "Curso em Vídeo";
$vetor = explode("", $site);//Parametros(Qual caracter de separação, fluxo)
print_r($vetor);
//saída: Array([0]=>Curso [1]=>em [2]=>Vídeo)
?>
```

- Função **str_split()** : Coloca cada letra de uma string em uma posição de um vetor.

```php
<?php
$nome = "Maria";
$vetor = str_split($nome);
print_r($vetor)
//saida:Arrey([0]=>M [1]=>a [2]=>r [3]=>i [4]=>a)
?>
```

- Função **implode()** : Transforma um vetor inteiro em uma string. 
OBS: pode ser substitu**í**da pela função **join();**

```php
<?php
$vetor[0] = "Curso";
$vetor[1] = "em";
$vetor[2] = "Vídeo";
$texto = implode("#", $vetor);
print($texto);
//saida: Curso#em#Vídeo
//se quiser espaços, pasta colocálos no lugar das serquilhas;
?>
```

- Função **chr() :** Retorna um caractere de acordo com seu código ASCII passado como parâmetro.
- Função **ord()** : Retorna o código ASCII de um caractere passado como parâmetro.

---

- Função **strtolower():** Converte a string para letras em minúsculo;
- Função **strtoupper():** Converte a string para letras em MAIÚSCULO;
- Função **ucfirst():** Converte a primeira letra para MAIÚSCULO;
- Função **ucwords():** Converte a primeira letra de todas as palavras para MAIÚSCULO;
- Função **strrev()**: Inverte a string;
- Função **strpos():** Localiza no parâmetro **string,** a posição do parâmetro da **substring.** Mas só efetua a busca em maiúsculas. Para localizar a substring em minúsculas, utilizamos **stripos();**

```php
<?php
$frase = "Estou aprendendo PHP";
$pos = strpos($frase, "PHP");
//se add a letra 'i' de ignore case (stripos), o case sensitive será ignorado.
?>
```

- Função **substr_count():** Informa quantas vezes uma **substring** aparece dentro de outra **string**

```php
<?php
$frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
$cont = substr_count($frase, "PHP");
print("PHP encontrado $cont vezes");
?>
```

- Função **substr:** Retira uma parte de uma string, começando do valor do segundo parâmetro e finalizando na posição do terceiro parâmetro. As posições não são obrigatórias e valores negativos retrocedem o contador.

```php
<?php
$site = "Curso em Vídeo";
$sub = substr($site, 0, 5);
print("PHP encontrado $cont vezes");
//saida:Curso
//Coletar da string $site, a partir da posição "0", andando "5" posições
?>
```

- Função **str_pad()**: ****Força a string caber em "x" caracteres utilizando preenchimento;

```php
<?php
$novo = "Guanabara";
$novo = str_pad($nome, 30," ",STR_PAD_RIGHT)
//STR_PAD_RIGHT é o preenchimento para aumentar o tamanho da string.
//pode ser utilizado o **STR_PAD_CENTER,** para centralizar, e o **STR_PAD_LEFT**, para preencher à esquerda;
?>
```

- Função **str_repeat():** Repete um texto "n" vezes;

```php
<?php
$txt = str_repeat("Php", 5);
print("O texto gerado foi $txt");
//saida: O texto gerado foi PhpPhpPhpPhpPhp
?>
```

- Função **str_replace**:

```php
<?php
$frase = "Gosto de estudar Matemática!!!";
$novaFrase = str_replace("Matemática","PHP", $frase);
print($novaFrase);
//saída: Gosto de estudar PHP
//se add a letra 'i' de ignore case (str_ireplace), o case sensitive será ignorado.
?>
```

**Dica de exercício: Gerar formulário, colher dados, manipulá-los utilizando as funções, apresentar dados manipulados e retornar na página dinamicamente.**

---

# Vetores e Matrizes

## Declaração do vetor:

```php
**$vet01[índex] = "valor";**
$vet02 = Array(3,5,8,2);
```

A alocação de memória no PHP é dinâmica, assim se você alocar um valor em uma posição maior do que o **length** do **array**, ele será alocado dinamicamente.

```php
$vet = Array(3,5,8,2);
$vet[] = 7;
//O número 7 será alocado em $vet[4] dinamicamente.
```

Podemos criar arrays também com a palavra **range:**

```php
$c = range(5,20,5);
```

- A primeira posição, $c[0], recebe 5;
- A ultima posição $c[3], recebe 20;
- O vetor vai ser preenchido contando no passo de 5 até o valor final, 20: // Array(5,10,15,20).

Utilizamos o **print_r()** para visualizar o vetor durante os testes, mas para uma saída, utilizaremos o **foreach:**

```php
$c = range(5,20,2);
foreach($c as $v) {
				echo "$v ";
}
//para cada elemento $c será exibido através de $v;
```

## **Chaves Personalizadas:**

```php
$v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
//$v vai criar um vetor com 4 posições, com os índices personalizados de acordo com a associação.
```

Se eu atribuir mais uma letra, o vetor irá alocá-la em no $v[9].

Para desalocar, utiliza-se o **unset($vetor[índex])**;

```php
$v = array(1=>"A", 3=>"B", 6=>"C", 8=>"D");
$v[] = "E";
//Para desalocar algum espaço no vetor, utilizaremos o unset(); passando o índice no vetor como argumento.
unset($v[9]);
```

## Chaves Associativas:

No exemplo, o índex é uma **string** e o resto funcionam como as chaves personalizadas.

```php
$cadastro = array("nome" => "Ana",
									"idade" => 23,
									"peso" => 78.5);
//Pedemos também adicionar mais uma posição personalizada depois da declaração:
$cadastro["fuma"] = true;
```

Variáveis compostas em php são **heterogenias**.

**Como utilizar o foreach com chaves personalizadas associativas?**

```php
$cadastro = array("nome" => "Ana",
									"idade" => 23,
									"peso" => 78.5,
									"fuma" => true);
foreach($cadastro as $campo=>$valor) {
			echo "O valor de $campo é $valor";
}
```

## Variáveis compostas multidimensionais (matrizes)

Tecnicamente, PHP não possui matrizes, mas podemos utilizar vetores dentro de vetores.

```php
$matrix = array(array(2,3),
								array(3,4),
								array(9,5));
//imprimimos da seguinte forma:
echo $matrix[2][0];
//Saida será a linha 2, coluna 0, o "9"
```

**OBS:** Utilize o **print_r()** para visualizar detalhadamente qualquer elemento do tipo coleção. Uma dica é utilizar junto com a tag **<pre></pre>**

## Funções para manipulação de Vetores em PHP

- Função **var_dump();** // dump significa jogar fora, segundo o google translator

```php
<pre>
	<?php
		$vetor = array("A", "B");
		var_dump($vetor); //Mostra o array detalhadamente com tipos e quantidade de elementos;
		print_r($vetor); //Mostra o array detalhadamente;
	?>
</pre>

```

- Função **count():** Mostra a quantidade de elementos do array, igual o **length** do **js**;
- Função **array_push(**$vetor, elemento**):** Adiciona um valor no final do vetor;
- Função **array_pop(**$vetor**):** Desaloca o ultimo valor do vetor; **LIFO(**Last In First Out**)**
- Função **array_unshift(**$vetor, elemento**):** Adiciona um elemento no início do vetor.
- Função **array_shift(**$vetor**):** Elimina o elemento do início do vetor; **FIFO(**First In First Out**);**
- Função **sort(**$vetor**):** Ordena de forma crescente os valores do vetor, sejam números ou letras;
- Função **rsort(**$vetor**)**: Ordena de forma decrescente os valores do vetor; [//](//reverse) reverse sort
- Função **asort(**$vetor**):** Ordena de forma crescente porém sem desassociar o elemento ao índice, assim o índice é reordenado junto com o elemento;
- Função **arsort(**$vetor**):** Ordena de forma decrescente sem desassociar o índice do elemento; // associated reverse sort
- Função **ksort(**$vetor**):** Ordena de forma crescente as **keys**, os índices, sem desassociar os elementos, os mesmos também vão ser ordenados junto com os índices;
- Função **krsort(**$vetor**):** Ordena as **keys** de forma decrescente;