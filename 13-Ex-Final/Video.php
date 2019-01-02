<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    //Sobscreve Métodos Abstratos da Interface AcoesVideo
    
    public function like() {
        $this->curtidas ++;
    }
    public function pause() {
        $this->setReproduzindo(FALSE);
    }
    public function play() {
        $this->setReproduzindo(TRUE);
    }
    
    //Métodos Acessores e Modificadores
    
    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(FALSE);
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    public function getViews() {
        return $this->views;
    }
    public function getCurtidas() {
        return $this->curtidas;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }
    public function setViews($views) {
        $this->views = $views;
    }
    public function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }
    public function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
}
?>