<?php

// Verifica se o POST existe antes de inserir um novo registro
if(isset($_POST["acao"])){
    if ($_POST["acao"]=="inserir"){
        inserirPessoa();
    }
    if ($_POST["acao"]=="alterar"){
        alterarPessoa();
    }
    if($_POST["acao"]=="excluir"){
        excluirPessoa();
    }
}

// Essa função cria 
function abrirBanco() {
    $conexao = new mysqli("localhost", "root", "", "unisale");
    return $conexao;
}

    function inserirPessoa(){
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
        $telefone = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $senha = MD5($_POST['senha']);
        $banco = abrirBanco();
        $sql = "INSERT INTO usuarios ( cpf, nome, celular, email, login, senha) VALUES ('$cpf', '$nome', '$telefone', '$email', '$login', '$senha')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável editar uma pessoa no meu banco de dados
    function alterarPessoa() {
        $banco = abrirBanco();
        $sql = "UPDATE usuarios SET nome='{$_POST["nome"]}',celular='{$_POST["celular"]}',cpf='{$_POST["cpf"]}',email='{$_POST["email"]}',login='{$_POST["login"]}',senha='{$_POST["senha"]}' WHERE idusuarios='{$_POST["idusuarios"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

// Função responsável excluir uma pessoa no meu banco de dados
    function excluirPessoa() {
        $banco = abrirBanco();
        $sql = "DELETE FROM usuarios WHERE idusuarios='{$_POST["idusuarios"]}'";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function selectAllPessoa() {
        $banco = abrirBanco();
        $sql = "SELECT * FROM usuarios ORDER BY nome";
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        while($row = mysqli_fetch_array($resultado)) {
            $grupo[] = $row;
        }
        return $grupo;
    }

    function selectIdPessoa($id) {
        $banco = abrirBanco();
        $sql = "SELECT * FROM usuarios WHERE idusuarios=".$id;
        $resultado = $banco->query($sql);
        $banco->close();
        // Laço que pega as informações do meu banco, organiza linha a linha e armazena na var $grupo
        $pessoa = mysqli_fetch_assoc($resultado);
        return $pessoa;
    }

  

// Após inserir uma nova pessoa, retorna para a página principal
    function voltarIndex(){
        header("Location:menu.php");
    }

?>