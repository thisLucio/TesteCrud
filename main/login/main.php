<?php
 require_once("../../Classes/Db.class.php");
 require_once("../../Classes/Usuario.class.php");

    $banco = new Db();
    $banco->conectar();
    $banco->setTabela("usuarios");

    $usuario = new Usuario();
    $usuario->setCpf($_POST['cpf']);
               $usuario->setNome($_POST['nome']);
               $usuario->setCelular($_POST['celular']);
               $usuario->setEmail($_POST['email']);
               $usuario->setLogin($_POST['login']);
               $usuario->setSenha($_POST['senha']);
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
    }
?>