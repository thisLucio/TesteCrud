<?php

include("conexao.php");
$pessoa = selectIdPessoa($_POST["idusuarios"]);
?>

<link rel="stylesheet" type="text/css" href="assets/css/table.css">
<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/comum.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosPessoa" action="conexao.php" method="post">       
        <div class="logo">
                        <img src="assets/img/user.png" alt="" />
                        <h1>Alterar Registro</h1>
                        </div>
                
                        <div class="form-group">
                            <input type="text" name="nome" value="<?=$pessoa["nome"]?>" size="20" placeholder="Digite seu Nome" />
                            <span></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="cpf" value="<?=$pessoa["cpf"]?>" size="20" placeholder="Digite seu Cpf:" />
                            <span></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="celular" value="<?=$pessoa["celular"]?>" size="20" placeholder="Digite seu Telefone" />
                            <span></span>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" value="<?=$pessoa["email"]?>" size="20" placeholder="Digite seu Email:" />
                            <span></span>
                        </div>
                        <div class="form-group">
                        <input type="text" name="login" value="<?=$pessoa["login"]?>" size="20" placeholder="Digite seu Login" />
                        <span></span>
                        </div>
                        <div class="form-group">
                        <input type="password" name="senha" value="<?=$pessoa["senha"]?>" size="20" placeholder="Digite sua senha:" />
                        <span></span>
                        </div>
                        <tr>
                        <td><input type="hidden" name="acao" value="alterar">
                            <input type="hidden" name="idusuarios" value="<?=$pessoa["idusuarios"]?>">
                        </td>
                        <td><input type="submit" name="Enviar" value="Enviar"></td>
                    </tr>
    
    </form>
</div>