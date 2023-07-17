<?php
require_once 'config.php';
require_once 'functions.php';

if(isset($_POST['register'])){
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    if($email != "" && $password != ""){
        createUser($conn, $email, $password);
    }
    header('Location: /login.php');
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create an Account</title>
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
        <h1>Create an Account :: Food Website</h1>
        <div class="form_container">
            <form action="/register.php" method="post">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Register" name="register">
            </form>
            <a href="./login.php">Login</a>
        </div>
    </div>
</body>
</html>