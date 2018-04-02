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
      	
      	<div id="revSearch">  
      		
     <form  method="post" action="search.php?go"  id="searchform">  
     	 You  may search cars using names given in list <br />
       <input  type="text" name="name" required  placeholder="Example - Alto">  
       <input  type="submit" name="submit" value="Search" class="revButton">  
     </form> 
     </div> 
      	
      	
 <table id="rev">
 	<tr>
   <td> <h1 >Search  Car Details</h1> </td>   
   </tr>
   <tr>
   	<td>
    <?php
  require 'connect.php';
	if(mysqli_connect_errno()){
		echo "Failed to connect to the server database : ".mysqli_connect_error();
	}
	else{
		 $name=$_POST['name'];
		$result = mysqli_query($con,"SELECT Image,Model,Colour,CostPerDay FROM Vehicle where Model='$name'");
		
		while ($row = mysqli_fetch_array($result)) {
			echo "<div >";
			echo "<img src='".$row['Image']."'/>";
			echo "<br/>Car         :".$row['Model'];
			echo "<br/>Colour       :".$row['Colour'];
			echo "<br/>Cost per day  :".$row['CostPerDay'];
			echo "</div>";
			
		
		}	
	 
		 
	}
	mysqli_close($con);
?>
</td> </tr>
</table>

</div>
        </div>
 
  </div>
  
  <div id="Footer">
    <div class="center">
      <div class="wrapper">
        <h2>Copyright  @ 2016  All Rights Reserved. </h2>
      </div>
    </div>
  </div>
</div>
</body>
</html>
