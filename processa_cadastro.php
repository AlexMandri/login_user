<?php
require_once("db.php");

$nome = $_POST("nome");
$sobrenome = $_POST("sobrenome");
$email = $_POST("email");
$senha = $_POST("senha");

$stmt = $conn->prepare(
    "INSERT INTO users
    (name, lastname,email,password)
    VALUES
    (:nome, :sobrenome, :email, :senha)"
);

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":senha", $senha);

$stmt->execute();

header("Location: index.php");
exit();
