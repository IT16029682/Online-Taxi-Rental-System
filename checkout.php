<?php
session_start();
require 'connect.php';
$total=$_GET["tot"];
$resID=$_SESSION['resID'];
$query="INSERT INTO Payment(Total,PaymentCompleteDate,Pay) VALUES ($total,now(),'NO')";
mysqli_query($con,$query);
$idInsertLast = mysqli_insert_id($con);

$_SESSION['paypal']= $idInsertLast ;
$_SESSION['TotalA']=$total ;

$query1="Update Reservation set PaymentID=($idInsertLast) where ReservationID=$resID";
mysqli_query($con, $query1);


header('Location: payment.php'); 
?>



