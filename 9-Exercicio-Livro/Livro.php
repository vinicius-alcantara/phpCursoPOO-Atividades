<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao {
    //Atributos
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    //Métodos
    public function detalhes(){
        echo "<hr>" . "Livro: " . $this->getTitulo() . "<br/>" . "Autor: " . $this->getAutor() . "</hr>";
        echo "<br/>" . "Qtd Pag: " . $this->getTotPaginas();
        echo "<br/>" . "Pag. Atual: " . $this->getPagAtual();
        echo "<br/>" . "Sendo Lido por: " . $this->leitor->getNome() . "</hr>";
        
        
    }
    
    //Métodos Especiais
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    
    function getTitulo() {
        return $this->titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function getTotPaginas() {
        return $this->totPaginas;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    function setAutor($autor) {
        $this->autor = $autor;
    }
    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }
    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }
    function setAberto($aberto) {
        $this->aberto = $aberto;
    }
    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    
    //Métodos de sobrescrita da interface Publicação
    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        if($this->pagAtual > 0 && $this->pagAtual < $this->totPaginas){
            $this->pagAtual ++;
        } else {
            $this->pagAtual = 0;
        }
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if($p > $this->totPaginas && $p < 1){
            $this->pagAtual = 0;
        } else {
            $this->setPagAtual($p);
        }
    }

    public function voltarPag() {
        if($this->pagAtual > 1 && $this->pagAtual <= $this->totPaginas ){
            $this->setPagAtual($this->getPagAtual() - 1);
        } else {
            echo "Impossível Voltar Página!";
        }
    }
}

