<?php
session_start();
 require 'connect.php';
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
// remove the item from the array
$queryD="Delete from Reservation where ReservationID=$id";
mysqli_query($con, $queryD);
unset($_SESSION['cart_items'][$id]);
// redirect to product list and tell the user it was removed
header('Location: cart.php?action=removed&id=' . $id);
?>