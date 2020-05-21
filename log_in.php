<?php
    require_once("init.php");
    

    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';


$PDO = db_connect();
 
$sql = "SELECT * FROM usuarios WHERE login= :login AND senha = :senha";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':login', $login);
$stmt->bindParam(':senha', $senha);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];
 
header('Location: menu.php');
?>