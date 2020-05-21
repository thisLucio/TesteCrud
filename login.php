<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/comum.css"> 
    <title>Projeto Final Lúcio</title>
</head>
<body>
    <form action="log_in.php" method="POST">

                    <div class="logo">
                        <img src="assets/img/user.png" alt="" />
                        <h1>Login</h1>
                    </div>
                    
                    <div class="form-group">
                    <input type="text" name="login" placeholder="Digite seu Login" />
                    <span></span>
                    </div>
                    <div class="form-group">
                    <input type="password" name="senha" placeholder="Digite sua Senha" />
                    <span></span>
                    </div>
                        <input type="hidden" name="acao" value="entrar">
                        <button type="submit">Login</button>
                   <br>
                   <a href="inserir.php">Clique aqui para cadastrar</a>
        </form>
        
</body>
</html>