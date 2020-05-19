<?php
 require_once("Classes/Db.class.php");
 require_once("Classes/Usuario.class.php");

 

 $banco = new Db();
 $banco->conectar();
 $banco->setTabela("usuarios");

 

 $usuario = new Usuario();
 $usuario->setNome($nome);
 $usuario->setCpf($cpf);
 $usuario->setCelular($numero);
 $usuario->setEmail($email);
 $usuario->setLogin($login);
 $usuario->setSenha(MD5($senha));
 $usuario->gravar($banco);

 if(mysqli_insert_id($banco))
    {
    $_SESSION['msg'] = "<p style = 'color:green;'>Usuario cadastrado com Sucesso</p>";
        header("Location: index.php");
    }
    else{
        $_SESSION['msg'] = "<p style = 'color:red;'>Usuario não foi cadastrado</p>";
        header("Location: index.php");
    }
/** 
 $usuario->setNome($nome);
 $usuario->setCpf($cpf);
 $usuario->setCelular($numero);
 $usuario->setEmail($email);
 $usuario->setLogin($login);
 $usuario->setSenha(MD5($senha));
 
 $nome =  filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
 $cpf =  filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
 $numero =  filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
 $email =  filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
 $login =  filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
 $senha =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_ENCODED);

 
 /*
 $usuario->setCpf("11122233344");
 $usuario->setNome("TESTUO NAKUMOTO TESTOK");
 $usuario->setCelular("(18) 991234564");
 $usuario->setEmail("Testuo@pessoal.com.br");
 $usuario->setLogin("Testuo@pessoal.com.br");
 $usuario->setSenha(MD5("1"));

 $usuario->gravar($banco);
 
realizarConsulta($usuario, $banco, "11122233344");

 $campos = array();
 $campos["nome"] = "TESTUO TESTOK";
 $where          = "cpf = '11122233344'";
 $retorno        = $usuario->alterar($banco, $where, $campos);


realizarConsulta($usuario, $banco, "11122233344");

$where          = "cpf = '11122233344'";
$retorno        = $usuario->excluir($banco, $where);

realizarConsulta($usuario, $banco, "11122233344");

function realizarConsulta($usuario,$banco, $cpf)
{
   $campos = "cpf, nome, email";
   //$where  = "idusuarios = '4'";
   //$where = "idusuarios > 0";
   $where = "cpf = '" . $cpf ."'";
   $registro = $usuario->consultar($banco, $campos, $where);
   $existe   = 0;
   foreach($registro as $linha)
   {
      echo "Cpf...:  " . $linha["cpf"]  . "<br>";
      echo "Nome...: " . $linha["nome"] . "<br>";
      echo "Email.:  " . $linha["email"] . "<br><br>";
      $existe = 1;
   }
   
   if ($existe == 0)
   {
      echo "<br>Não foi encontrado registro.";
   }
}*/
 ?>
 