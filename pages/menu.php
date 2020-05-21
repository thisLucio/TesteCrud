<!DOCTYPE html>

<?php include("conexao.php");

    $grupo = selectAllPessoa();
    
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Projeto CRUD - Serginho</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/table.css">
    
</head>
<div class="container">
    <body>
     <div class="posicionarCabecalho">
          <h1>Tabela de Registros</h1>
      </div>
      <table border="1" class="table">
          <thead class="thead-light">
              <tr>
                  <th>Nome</th>
                  <th>Cpf</th>
                  <th>Celular</th>
                  <th>Email</th>
                  <th>Login</th>
                  <th>Editar</th>
                  <th>Excluir</th>
              </tr>
          </thead>
          <tbody>
             <?php 
                foreach($grupo as $pessoa) { ?>

                   <tr>
                      <th><?=$pessoa["nome"]?></th>
                      <th><?=$pessoa["cpf"]?></th>
                      <th><?=$pessoa["celular"]?></th>
                      <th><?=$pessoa["email"]?></th>
                      <th><?=$pessoa["login"]?></th>
                   <!--   <th><?=$pessoa["senha"]?></th> -->
                      <th>
                          <form name="alterar" action="alterar.php" method="post">
                              <input type="hidden" name="idusuarios" value="<?=$pessoa["idusuarios"]?>">
                              <input type="submit" name="editar" value="Editar">
                          </form>
                      </th>
                      <th>
                          <form name="excluir" action="conexao.php" method="post">
                              <input type="hidden" name="idusuarios" value="<?=$pessoa["idusuarios"]?>">
                              <input type="hidden" name="acao" value="excluir">
                              <input type="submit" name="excluir" value="Excluir">
                          </form>
                      </th>
                  </tr>   
                <?php }
              ?>
          </tbody>
     </table>
      <div class="text-center">
           <button type="button" class="btn btn-primary"><a href="inserir.php">Adicionar usuário</a></button>
      </div>
    </body>
</div>
</html>