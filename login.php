<?php
require_once 'config.php';
require_once 'functions.php';
if(isset($_POST['login'])){
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if(isUserCorrect($conn, $email, $password)){
        session_start();
        $_SESSION['logged_in'] = 1;
        header('Location: /checkout.php');
    }else{
        header('Location: /login.php?err');
    }
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
        }
.login_wrapper {
  max-width: 800px;
  width: 100%;
  margin: auto;
  border: 1px solid #ddd;
  padding: 25px
}
.login_wrapper h1 {
  text-align: center;
  border-bottom: 1px solid #ddd;
  padding: 10px 0;
}
.form_container input {
  display: block;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 10px;
  margin: 10px 0;
  font-size: 16px;
}
input[type="submit"]{
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="login_wrapper">
        <h1>Login :: Food Website</h1>
        <div class="form_container">
            <small style="color:red"><?= isset($_GET['err']) ? 'Wrong credentials, please enter correct details' : 'You must login first!' ?></small>
            <form action="/login.php" method="post">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Login" name="login">
            </form>
            <a href="./register.php">Create an Account</a>
        </div>
    </div>
</body>
</html>