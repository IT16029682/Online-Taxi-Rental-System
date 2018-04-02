<?php
require 'connect.php';
session_start();
$cusID = $_SESSION['CID']; 
$PickDate=$_REQUEST['PDate'];
$PickTime=$_REQUEST['PTime'];
$NoDays=$_REQUEST['NDate'];
//$RetDate=$_REQUEST['RDate'];
$car=$_POST['vehicles'];

$carname=$_POST['vehicles'];

$queryCar="SELECT VehicleID,CostPerDay FROM Vehicle WHERE Model='$carname'"; 

$result1=mysqli_query($con,$queryCar);
$row=mysqli_fetch_array($result1);
$val= $row['CostPerDay'];
$rental=$val*$NoDays;
$VID=$row['VehicleID'];
$PickDate=$PickDate." ".$PickTime;
echo "$PickDate";
//echo "$rental";
$sql="INSERT INTO  Reservation(ReservedDate,PickupDate,NoOfDays,ReturnDate,Rental,VehicleID,CId) VALUES (now(),'$PickDate','$NoDays',DATE(DATE_ADD(PickUpDate,INTERVAL $NoDays DAY)),'$rental','$VID','$cusID')";
mysqli_query($con,$sql);


echo "1 record added";
//mysqli_close($con);
echo $idInsertLast = mysqli_insert_id($con);
session_start();
$_SESSION['resID'] = $idInsertLast;
require 'add.php';
?>
