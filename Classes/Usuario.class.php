<?php
class Usuario
{
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
   public function setNome($nome)
   {
       $this->nome = $nome;
   }
   public function setCelular($celular)
   {
       $this->celular = $celular;
   }
   public function setEmail($email)
   {
       $this->email = $email;
   }
   public function setLogin($login)
   {
       $this->login = $login;
   }
   public function setSenha($senha)
   {
       $this->senha = $senha;
   }

   public function gravar(Db $banco)
   {
       $dados=[];
       $dados["cpf"]      = $this->cpf;
       $dados["nome"]     = $this->nome;
       $dados["celular"]  = $this->celular;
       $dados["email"]    = $this->email;
       $dados["senha"]    = $this->senha;

       $retorno = $banco->gravar($dados);
       return $retorno;
   }

   public function consultar(Db $banco, $campos = "*", $where)
   {
       $dados = $banco->consultar($campos, $where);
       return $dados;
   }
   public function alterar(Db $banco, $where, $dados)
   {
         $dados = $banco->alterar($dados , $where);
         return $dados;
   }
   public function excluir(Db $banco, $where)
   {
       $dados=$banco->excluir($where);
       return $dados;
   }
}