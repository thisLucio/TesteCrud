<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilo/style.css">
    <link rel="stylesheet" href="estilo/comum.css">
    <title>Projeto Final Lúcio</title>
</head>
<body>
    <form action="php/processa.php" method="POST">

                    <div class="logo">
                        <img src="../../assets/img/user.png" alt="" />
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
                        <input type="text" name="telefone" placeholder="Digite seu Telefone" />
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
                    <input type="text" name="senha" placeholder="Digite sua" />
                    <span></span>
                    </div>
                    <button type="submit"">Enviar</button>
        </form>
</body>
</html>