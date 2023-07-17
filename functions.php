<?php
function isUserExists($conn, $email){
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $res){
            $id = $res['id'];
        }
        return $id;
    }else{
        return false;
    }
}

function addUser($conn, $fname, $lname, $email, $phone, $city, $address, $postcode){
    $sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `phone`, `city`, `address`, `postcode`)
    VALUES ('$fname', '$lname', '$email', '$phone', '$city', '$address', '$postcode')";
    $result = mysqli_query($conn, $sql);
}
function createOrder($conn, $user_id, $price, $delivery_method, $products){
    $sql = "INSERT INTO `orders` (`user_id`, `price`, `delivery_method`, `products`)
    VALUES ('$user_id', '$price', '$delivery_method', '$products')";
    $result = mysqli_query($conn, $sql);
}

function isUserCorrect($conn, $email, $password){
    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        foreach($result as $res){
            $id = $res['id'];
        }
        return $id;
    }else{
        return false;
    }
}

function createUser($conn, $email, $password){
    $sql = "INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `phone`, `city`, `address`, `postcode`)
    VALUES ('Demo', 'Demo', '$email', '$password', '', '', '', '')";
    $result = mysqli_query($conn, $sql);
}