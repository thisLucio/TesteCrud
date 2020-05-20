<?php


?>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
--><link rel="stylesheet" type="text/css" href="estilo/table.css">
<link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/comum.css">
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
                    <input type="text" name="senha" placeholder="Digite sua senha:" />
                    <span></span>
                    </div>
                <tr>
                    <td><input type="hidden" name="acao" value="inserir"></td>
                    <td><input type="submit" name="Enviar" value="Enviar"></td>
                </tr>
    </form>
</div>