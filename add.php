<?php
session_start();
require 'connect.php';
$id= $_SESSION['resID'];
/*
 * check if the 'cart' session array was created
 * if it is NOT, create the 'cart' session array
 */
if(!isset($_SESSION['cart_items'])){
    $_SESSION['cart_items'] = array();
}
$_SESSION['cart_items'][$id]=null;
echo $_SESSION['cart_items'][$id];
header('Location: rev.html?action=added&id' . $id);

?>