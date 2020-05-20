<?php
 require_once('../Classes/bancolucio.class.php');

    class CrudUser{
        private $idUsuario;
        private $cpf;
        private $nome;
        private $celular;
        private $email;
        private $login;
        private $senha;

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function getCpf()
        {
            return $this->cpf;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function getNome()
        {
            return $this->nome;
        }

        public function setCelular($celular)
        {
            $this->celular = $celular;
        }
        public function getCelular()
        {
            return $this->celular;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function setLogin($login)
        {
            $this->login = $login;
        }
        public function getLogin()
        {
            return $this->login;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
        public function getSenha()
        {
            return $this->senha;
        }
    }
?>