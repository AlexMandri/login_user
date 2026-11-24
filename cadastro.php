<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="card">
        <h1>Cadastrar usuário</h1>

        <form action="processa_cadastro.php" method="POST">
            <div class="field">
                <input type="text" name="nome" placeholder="Nome" require>
            </div>
            <div class="field">
                <input type="text" name="sobrenome" placeholder="Sobrenome" require>
            </div>
            <div class="field">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="field">
                <input type="password" name="senha" placeholder="Senha" require>
            </div>
            <button type="submit">Cadastrar</button>

        </form>
    </div>
</body>

</html>