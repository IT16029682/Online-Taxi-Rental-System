<?php
    
session_start();
require 'connect.php';

$paypal=$_SESSION['paypal']  ;  

	
$queryCan="delete from Payment where PaymentID=$paypal";
mysqli_query($con, $queryCan);

header('Location: cart.php'); 
?>