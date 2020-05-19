<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/style.css">
    <link rel="stylesheet" href="estilo/comum.css">
    <title>Projeto Final Lúcio</title>
</head>
<body>
    <form action="mainUsuario.php" method="POST">
            <fieldset>
                    <div class="form-group">
                        <label for="form-group">Nome:</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for ="cpf">Cpf:</label>
                        <input type="text" id="cpf" name="cpf">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone: </label>
                        <input type="tel" id="telefone" name="telefone" style="width: 10em" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail: </label>
                        <input type="email" id="email" name="email" style="width: 20em" value="">
                    </div>
                    <div class="form-group">
                        <label for="login">Login:</label>
                        <input type="text" id="login" name="login">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" id="senha" name="senha">
                    </div>
                    <button type="submit" name="submit">Enviar</button>
            </fieldset>
        </form>
</body>
</html>