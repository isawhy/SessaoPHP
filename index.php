<?php
    if(!isset($_SESSION)) 
        session_start(); // Inicia a sessão
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <h1>Oba, você logou</h1>
                <p>Agora é só sair.</p>
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </body>
</html>