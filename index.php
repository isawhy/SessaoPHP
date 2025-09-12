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
        <h1>Welcome to the Home Page</h1>
        <p>You are successfully logged in.</p>
        <a href="logout.php">Logout</a>
    </body>
</html>