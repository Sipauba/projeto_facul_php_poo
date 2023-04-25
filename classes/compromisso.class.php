<?php
//classe independente das demais classes
class Compromisso {
    private $titulo;
    private $data;
    private $hora;
    private $local;
    
    public function __construct($titulo, $data, $hora, $local) {
      $this->titulo = $titulo;
      $this->data = $data;
      $this->hora = $hora;
      $this->local = $local;
    }
    
    public function getTitulo() {
      return $this->titulo;
    }
    
    public function getData() {
      return $this->data;
    }
    
    public function getHora() {
      return $this->hora;
    }
    
    public function getLocal() {
      return $this->local;
    }
    
    public function setTitulo($titulo) {
      $this->titulo = $titulo;
    }
    
    public function setData($data) {
      $this->data = $data;
    }
    
    public function setHora($hora) {
      $this->hora = $hora;
    }
    
    public function setLocal($local) {
      $this->local = $local;
    }

    public function notificar() {
        echo "Compromisso marcado para " . $this->getData() . " às " . $this->getHora() . " em " . $this->getLocal() . ".";
    }
  }
?>