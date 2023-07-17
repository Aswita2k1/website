<?php
require_once 'config.php';
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = 2");
foreach($result as $res){
    $fname = $res['fname'];
    $lname = $res['lname'];
    $name = $fname . ' ' . $lname;
    $email = $res['email'];
    $phone = $res['phone'];
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 800px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}

.user_img {
  height: 150px;
  width: 150px;
  margin: auto;
}
</style>
</head>
<body>

<h2 style="text-align:center">My Account</h2>
<hr>

<div class="card">
  <div class="user_img">
  <img src="/images/user.png" alt="John" style="width:100%">
  </div>
  <h1><?= $name?></h1>
  <p><?= $email?></p>
  <p><?= $phone?></p>
  <p><button onclick="window.location = '/'">&leftarrow; Back to Home</button></p>
</div>

</body>
</html>
