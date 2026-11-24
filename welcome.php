<?php
session_start();

if (!isset($_SESSION["nome"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo usuário</title>
</head>

<body>
    <h1>Bem-vindo
        <?=  $_SESSION["nome"] ?>
    </h1>
</body>

</html>