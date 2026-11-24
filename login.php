<?php
require_once("db.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$stmt = $conn->prepare(
    "SELECT * FROM users
    WHERE email = :email
    and password = :senha"
);

$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha);

$stmt->execute();

$user = $stmt->fetch();

if($user){
    session_start();
    $_SESSION["nome"] = $user["nome"];

    header("Location: welcome.php");
    exit();
}else{
    echo "Usuário ou senha inválidos";
}