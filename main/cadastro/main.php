<?php
 require_once("../../Classes/Db.class.php");
 require_once("../../Classes/Usuario.class.php");

    $banco = new Db();
    $banco->conectar();
    $banco->setTabela("usuarios");

     $usuario = new Usuario();
     $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
     $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
     $telefone = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
     $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
     $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
     $senha =filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
               $usuario->setCpf($_POST['cpf']);
               $usuario->setNome($_POST['nome']);
               $usuario->setCelular($_POST['celular']);
               $usuario->setEmail($_POST['email']);
               $usuario->setLogin($_POST['login']);
               $usuario->setSenha($_POST['senha']);

    $usuario->gravar($banco);
    header("Location: ../login/login.php");

    
    ?>