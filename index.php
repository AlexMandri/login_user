<?php
require_once("db.php");
require_once("globals.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuários</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="card">
        <h1>Welcome Back</h1>
        <form action="login.php" method="POST">
            <div class="field">
                <input type="email" name="email" placeholder="Email address" aria-label="password">
            </div>
            <div class="field">
                <input type="password" name="senha" placeholder="password" aria-label="password">
            </div>
            <button type="submit">Log In</button>
        </form>
        <p class="hint">No Account? <a href="#">Create One</a></p>
    </div>
</body>

</html>