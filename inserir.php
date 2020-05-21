<?php

?>
<link rel="stylesheet" type="text/css" href="assets/css/table.css">
<link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/comum.css">
<meta charset="UTF-8">
<div class="container">
    <form name="dadosPessoa" action="conexao.php" method="post">
    <div class="logo">
                    <img src="assets/img/user.png" alt="" />
                    <h1>Cadastrar Usuário</h1>
                    </div>
            
                    <div class="form-group">
                        <input type="text" name="nome" placeholder="Digite seu Nome" />
                        <span></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="cpf" placeholder="Digite seu Cpf:" />
                        <span></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="celular" placeholder="Digite seu Telefone" />
                        <span></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Digite seu Email:" />
                        <span></span>
                    </div>
                    <div class="form-group">
                    <input type="text" name="login" placeholder="Digite seu Login" />
                    <span></span>
                    </div>
                    <div class="form-group">
                    <input type="password" name="senha" placeholder="Digite sua senha:" />
                    <span></span>
                    </div>
                <tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
    </form>
</div>