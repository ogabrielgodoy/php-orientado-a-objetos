<?php

class Login {
    // public $email;
    // public $senha;

    private $email;
    private $senha; 

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

$logar = new Login ();
$logar->setEmail("test//)e@teste.com");
$logar->setSenha("1234");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();