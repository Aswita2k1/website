<?php
session_start();
if(isset($_SESSION['logged_in'])){
    if($_SESSION['logged_in'] != 1){
        header("Location: /login.php");
        die();
    }
}else{
    header("Location: /login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover">
    <title>Food Website</title>
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
    
        <!-- desktop view -->
        <div class="container" id="container">
            <div id="menu">
                <div class="title">
                    <img src="/images/foodie hunter.png" alt="">
                </div>
                <div class="menu-item">
                    <a href="#">About</a>
                    
                    <a href="#">Your Orders</a>
                    
                    <a href="#">Cart</a>
                    <a href="#">Contact</a>
                    <a href="#">Checkout</a>
                    <a href="/logout.php">Logout</a>
                </div>
            </div>
    
            <div id="food-container">
                <div id="header">
                    <div class="add-box">
                        <i class="fa fa-map-marker your-address" id="add-address"> Your Address</i>
                    </div>
                    <div class="util">
                        <i class="fa fa-search"> Search</i>
                        <i class="fa fa-tags"> Offers</i>
                        <!-- <i class="fa fa-cart-plus" id="cart-plus"> 0 Items</i> -->
                    </div>
                </div>
                <!--  -->
                <h2>Checkout</h3>
                <hr>
                <div class="checkout_wrapper">
                    <div class="leftsection">
                        <h3>Shipping Address</h3>
                        <form class="chk_form" method="post" action="placeorder.php">
                            <input name="fname" type="text" placeholder="First Name">
                            <input name="lname" type="text" placeholder="Last Name">
                            <input name="email" type="email" placeholder="Email Address">
                            <input name="phone" type="text" placeholder="Phone Number">
                            <input name="city" type="text" placeholder="City">
                            <input name="address" type="text" placeholder="Address">
                            <input name="postcode" type="text" placeholder="Postcode">
                            <label for="first">Pick Up From Store</label>
                            <input type="radio" value="store" name="delievery_method" id="first">
                            <label for="second">Home Delivery</label>
                            <input type="radio" value="home" name="delievery_method" id="second" checked> 
                            <br>
                            <input type="hidden" id="formPrice" name="price">
                            <input type="submit" name="submit" value="Place Order">
                        </form>
                    </div>
                    <div class="rightsection">
                        <h3>Summary</h3>
                        <hr>
                        <table id="products-table">
                        </table>
                        <hr>
                        <div class="price_section">
                           <div>
                            <table class="chk_pricing">
                                <tr>
                                    <td><strong>Grand Total:</strong></td>
                                    <td>$<span id="gtotal"></span></td>
                                </tr>
                                <tr>
                                    <td><strong>Delivery Fee</strong></td>
                                    <td>$<span id="fee">4</span></td>
                                </tr>
                                <tr>
                                    <td><strong>To Pay:</strong></td>
                                    <td>$<span id="topay"></span></td>
                                </tr>
                            </table>
                           </div>
                        </div>
                    </div>
                </div>
                <!--  -->
    
                <div id="cart-page" class="cart-toggle">
                    <p id="cart-title">Cart Items</p>
                    <p id="m-total-amount">Total Amout : 100</p>
                    <table>
                        <thead>
                            <td>Item</td>
                            <td>Name</td>
                            <td>Quantity</td>
                            <td>Price</td>
                        </thead>
                        <tbody id="table-body">
                            
                        </tbody>
                    </table>
                    <div class="btn-box">
                        <!-- <button class="cart-btn">Checkout</button> -->
                    </div>
                </div>
            </div>
    
            <!-- <div id="cart">
                <div class="taste-header">
                    <div class="user">
                        <i class="fa fa-user-circle" id="circle"> Account</i>
                        
                    </div>
                </div>
                <div id="category-list">
                    <p class="item-menu">Go For Hunt</p>
                    <div class="border"></div>                
                </div>
                <div id="checkout" class="cart-toggle">
                    <p id="total-item">Total Item : 5</p>
                    <p id="total-price"></p>
                    <p id="delievery">Free delievery on $ 40</p>
                    <button class="cart-btn">Checkout</button>
                </div>
            </div> -->
        </div>
    
    
        <!-- mobile view -->
        <div id="mobile-view" class="mobile-view">
            <div class="mobile-top">
                <div class="logo-box">
                    <img src="/images/foodielogo.png" alt="" id="logo">
                    <i class="fa fa-map-marker your-address" id="m-add-address"> Your Address</i>
                </div>
                <div class="top-menu">
                    <i class="fa fa-search"></i>
                    <i class="fa fa-tag"></i>
                    <i class="fa fa-heart-o"></i>
                    <i class="fa fa-cart-plus" id="m-cart-plus"> 0</i>
                </div>
            </div>
            
            <div class="item-container">
                <div class="category-header" id="category-header">  
                </div>
    
                <div id="food-items" class="food-items">
                    <div id="chinese" class="m-chinese">
                        <p id="category-name">Chinese</p>    
                    </div>
                    <div id="Thai" class="m-thai">
                        <p id="category-name">Thai</p>    
                    </div>
                    
                </div>            
            </div>
    
            <div class="mobile-footer">
                <p>Home</p>
                <p>Cart</p>
                
                <p>orders</p>
            </div>
        </div>
        <!-- <script src="/index.js" type="module"></script> -->
        <script src="checkout.js"></script>
    </body>
    </html>