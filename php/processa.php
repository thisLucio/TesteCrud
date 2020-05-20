<?php
    session_start();
    require_once('../Classes/bancolucio.class.php');

    //$nome = $_POST['nome'];

    //echo 'Tá funcionando ' . $nome;
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
    $telefone = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $senha =filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    
    $result_usuarios = "INSERT INTO usuarios ( cpf, nome, celular, email, login, senha) VALUES ('$cpf', '$nome', '$telefone', '$email', '$login', '$senha')";
    $resultado_usuario = mysqli_query($conn, $result_usuarios);

    if(mysqli_insert_id($conn))
    {
    $_SESSION['msg'] = "<p style = 'color:green;'>Usuario cadastrado com Sucesso</p>";
        header("Location: ../main/login/login.php");
    }
    else{
        $_SESSION['msg'] = "<p style = 'color:red;'>Usuario não foi cadastrado</p>";
        header("Location: ../main/login/login.php");
    }
    ?>