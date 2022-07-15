<?php
class Login{
    public $user;
    public $pass;
    public function validaLogin(){
        if(isset($_POST['user']) &&  isset($_POST['user'])){
        $this->user = $_POST['user'];
        $this->pass = $_POST['pass'];
       
        if($this->user =="root" && $this->pass =="toor"){
            header("Location:index.php");
        }else{
            echo('<div class="alert alert-danger" role="alert">
            Usuario ou Senha invalidos!
          </div>');
        }
    }

}
}
class Mensagem{
    public $nomeCompleto;
    public $email;
    public $telefone;
    public $msg;
    public function recebeMensagem(){
        if(isset($_POST['nomeCompleto'])&& isset($_POST['email'])&& isset($_POST['tel']) && isset($_POST['msg'])){
        $this->nomeCompleto = $_POST['nomeCompleto'];
        $this->email = $_POST['email'];
        $this->telefone = $_POST['telefone'];
        $this->msg = $_POST['msg'];
        }
        if(isset($_POST['btnEnviar'])){
            echo('<div class="alert alert-success" role="alert">
            Mensagem Enviada com sucesso!
          </div>');
        }
    }
}
?>