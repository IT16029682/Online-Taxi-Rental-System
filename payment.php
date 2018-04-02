<!DOCTYPE html>
<html>
	<head> <script>
		function load()
		{
		document.frm1.submit()
		}
		</script>
		<title >
		
	</title></head>
	<body onload="load()">


<form  name="frm1" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">

<input type="hidden" name="return" value="http://localhost/itaa/paypalr.php" >

<input type="hidden" name="cancel_return" value="http://localhost/itaa/PaypalC.php" />
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="support@carrental.lk">
<input type="hidden" name="upload" value="1">





<?php

session_start();








	

 $totalA=$_SESSION['TotalA'] ;
 $amount=round($totalA/145, 2) ;
 
 
 


$itemCode1=$_SESSION['paypal'] ;

$itemCodeR="PaymentID"."  ".$itemCode1 ;


echo '<input type="hidden" name="item_name_1" value="'. $itemCodeR.'">';
echo '<input type="hidden" name="item_code_1" value="'. $itemCode1.'">';


//"<!-- Change this to the price of the first item -->  "
echo '<input type="hidden" name="amount_1" value="'. $amount .'"> ' ;

echo '<input type="hidden" name="quantity_1" value="1"><br> ' ;



?>





</form> 


</body>
</html>
