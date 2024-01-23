<?php
    // variable pendefinisian kredensial
    $usernamelogin = $_POST['username'];
    $passwordlogin = $_POST['password'];

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan kredensial login
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: tabel_list.php");
    } 
    else {
        header("Location: login.php");
   }
?>