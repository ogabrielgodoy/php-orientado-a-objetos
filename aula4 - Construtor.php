<?php

class Login {
    // public $email;
    // public $senha;

    private $email;
    private $senha; 

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "1234"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;
    }
}

$logar = new Login ("test//)e@teste.com","1234", "Gabriel Godoy");
$logar->Logar();
echo "<br>";
echo $logar->getNome();