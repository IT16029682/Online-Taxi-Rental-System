


<?php
// Start the session
require 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Car Rental Sri Lanka</title>

<link href="css/main.css" rel="stylesheet" type="text/css" />




</head>
<body>
<div id="mainContainer">
  <div id="TopNav">
    <div class="center">
      <div class="wrapper">
      	<a class="link5" href="home1.html" title="Home">Home</a>
        <a class="link5" href="about.html" title="About Us">About Us</a>
        <a class="link5" href="rev.html" title="Reservation">Reservation</a>
        <a class="link5" href="contact.html" title="Contact Us">Contact Us</a>
        <h2 style="text-align:right;">  </h2>
      </div>
    </div>
  </div>
  
<div id="BodyCom" >
    <div class="center">
      
      <div class="wrapper">
        
       
       
       <?php
if(count($_SESSION['cart_items'])>0){
 
    // get the product ids
    $ids = "";
    foreach($_SESSION['cart_items'] as $id=>$value){
        $ids = $ids . $id . ",";
    }
 
    // remove the last comma
    $ids = rtrim($ids, ',');
 
    //start table
    echo "<table  cellspacing='0' cellpadding='0' width='100%'>";
 
        // our table heading
        echo "<tr>";
            echo "<th class='textAlignLeft'>Reservation ID</th>";
            echo "<th>Rental (Rs)</th>";
            echo "<th>Action</th>";
        echo "</tr>";
 
        $query = "SELECT ReservationID, Rental FROM Reservation WHERE ReservationID IN ({$ids})";
 
        $result=mysqli_query($con,$query);
 
        $total_price=0;
        while ($row = mysqli_fetch_array($result)){
 
            echo "<tr>";
                echo "<td>".$row['ReservationID']."</td>";
				$reID=$row['ReservationID'];
                echo "<td>".$row['Rental']."</td>";
				$price=$row['Rental'];
                echo "<td>";
                    echo "<a href='remove.php?id=$reID'>";
                        echo "Remove from cart";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
            $total_price+=$price;
        }
 
        echo "<tr>";
                echo "<td><b>Total</b></td>";
                echo "<td>$total_price</td>";
                echo "<td>";
                    echo "<a href='checkout.php?tot=$total_price'>";
                        echo "Checkout";
                    echo "</a>";
                echo "</td>";
            echo "</tr>";
 
    echo "</table>";
}
else{
    echo "No products found in your cart!";
}

?>
       
   	
          </div>
        </div>
 
  </div>
  
  <div id="Footer">
    <div class="center">
      <div class="wrapper">
        <h2>Copyright  © 2016  All Rights Reserved. </h2>
      </div>
    </div>
  </div>
</div>
</body>
</html>
