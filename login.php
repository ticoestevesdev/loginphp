<?php
session_start();
$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

$_SESSION['usuario'] = $user;

    if ($user == "admin" && $password == "1234")
    {
        $_SESSION['valor_user'] =  1;
        header("Location: dashboard.php");
    } 
    else if ($user != "admin" && $password == "1234")
    {
        $_SESSION['valor_user'] = 2;
        $_SESSION['loginErro'] = "<h5 class='message_error'>Usuário incorreto.</h5>";
        header("Location: index.php");
    } 
    else if ($user == "admin" && $password != "1234")
    {
        $_SESSION['valor_user'] = 2;
        $_SESSION['loginErro'] = "<h5 class='message_error'>Senha incorreta.</h5>";
        header("Location: index.php");
    } 
    else
    {
        $_SESSION['valor_user'] = 2;
        $_SESSION['loginErro'] = "<h5 class='message_error'>Usuário e Senha incorretos.</h5>";
        header("Location: index.php");
    }