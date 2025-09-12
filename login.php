<!DOCTYPE html>
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <h2>Login</h2>
            <form class="login-form" action="autenticacao.php" method="POST">
                <input type="text" placeholder="login" name="login"/>
                <input type="password" placeholder="senha" name="senha"/>
                <button>login</button>
                <p class="message">Não foi cadastrado? <a href="#">Criar a conta</a></p>
            </form>
        </div>
    </div>
</body>