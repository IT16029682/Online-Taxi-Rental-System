<?php
    
session_start();
require 'connect.php';

$paypal=$_SESSION['paypal']  ;  

	
$query12="Update Payment set Pay=('YES')  where PaymentID=$paypal";
mysqli_query($con, $query12);

header('Location: home2.php'); 
?>