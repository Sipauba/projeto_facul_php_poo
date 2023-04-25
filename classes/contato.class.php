<?php
//herança da classe pai (pessoa)
class Contato extends Pessoa {
    private $telefone;
    
    public function __construct($nome, $email, $telefone) {
      parent::__construct($nome, $email);
      $this->telefone = $telefone;
    }
    
    public function getTelefone() {
      return $this->telefone;
    }
    
    public function setTelefone($telefone) {
      $this->telefone = $telefone;
    }
  }
  
?>