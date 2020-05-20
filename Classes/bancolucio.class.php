<?php
/**
 * Funciona tal como a classe Db.class que o senhor passou em aula
 * Só que de uma forma muito mais resumida e passível de bugs
 * @author Lúcio Bergamasco
 */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "unisale";

//Criar a conexão

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


?>