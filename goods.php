<?php
require_once './cart.php';
$cart = Cart::Getcat();
// var_dump($cart);
//应该是一系列的  $_POST['type'] $_POST['name'] $_POST['num'] $_POST['price'];
$cart->Additem('1','谍匪片','5','999');
echo session_id() . "<br />";
print_r($cart);