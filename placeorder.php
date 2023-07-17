<?php
require_once "config.php";
require_once "functions.php";
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $postcode = $_POST['postcode'];
    $delivery_method = $_POST['delievery_method'];
    $price = $_POST['price'];
    $products = "test json date";

    if($email != ""){
        $user_id = isUserExists($conn, $email);
        if($user_id){
            createOrder($conn, $user_id, $price, $delivery_method, $products);
        }else{
            addUser($conn, $fname, $lname, $email, $phone, $city, $address, $postcode);
        }
        header('Location: /success.php');
    }
}