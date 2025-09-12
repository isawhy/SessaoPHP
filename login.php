<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="autenticacao.php">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>