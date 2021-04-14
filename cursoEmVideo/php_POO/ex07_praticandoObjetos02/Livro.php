<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    //Métodos especiais
    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this -> setTitulo($titulo);
        $this -> setAutor($autor);
        $this -> setTotPaginas($totPaginas);
        $this -> setLeitor($leitor);
        $this -> setAberto(false);
        $this -> setPagAtual(0);
    }
    public function getTitulo() {
        return $this -> titulo;
    }
    public function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }
    public function getAutor() {
        return $this -> autor;
    }
    public function setAutor($autor) {
        $this -> autor = $autor;
    }
    public function getTotPaginas() {
        return $this -> totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this -> totPaginas = $totPaginas;
    }
    public function getPagAtual() {
        return $this -> pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this -> pagAtual = $pagAtual;
    }
    public function getAberto() {
        return $this -> aberto;
    }
    public function setAberto($aberto) {
        $this -> aberto = $aberto;
    }
    public function getLeitor() {
        return $this -> leitor;
    }
    public function setLeitor($leitor) {
        $this -> leitor = $leitor;
    }
    //Métodos
    public function detalhes() {
        echo "<br>Livro: ".$this -> titulo;
        echo "<br>Autor: ".$this -> autor;
        echo "<br>Páginas: ".$this -> totPaginas;
        echo "<br>Página Atual: ".$this -> pagAtual;
        echo "<br>Está sendo lido por: ".$this -> leitor -> getNome();
    }
    //Implementação Interface
    public function abrir() {
        $this -> setAberto(true);
    }
    public function fechar() {
        $this -> setAberto(false);
    }
    public function folhear($p) {
        if (($this -> getPagAtual() + $p) > $this -> getTotPaginas()) {
            $this -> setPagAtual(0);
        } else {
            $this -> setPagAtual($this -> getPagAtual() + $p);
        }
        
    }
    public function avancarPag() {
        $this -> setPagAtual($this -> getPagAtual() + 1);
    }
    public function voltarPag() {
        $this -> setPagAtual($this -> getPagAtual() - 1);
    }
}
?>
