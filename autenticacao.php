<?php
    require_once 'login.php';
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST['login'] ? $_POST['login'] : '';
        $senha = $_POST['senha'] ? $_POST['senha'] : '';

        // Simulated user data for demonstration purposes
        $users = [
            'vitor' => 'senha012',
            'nicolau' => '123456'
        ];

        if (array_key_exists($login, $users) && $users[$login] === $senha) {
            $_SESSION['loggedin'] = true;
            header("Location: index.php");
            exit();
        } else {
            //echo "<p>Login invalido, tente novamente.</p>";
            $_SESSION['loggedin'] = false;
            $_SESSION['error'] = "Login invalido, tente novamente.";
            header("Location: login.php?error=1");
            exit();
        }
    }