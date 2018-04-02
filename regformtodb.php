<?php
  		require 'connect.php';
		
	if(empty($_POST['fname']) || empty($_POST['lname']))
	{
	 	die("there is one or more fields empty!");
	}
	
	else 
		{
		   
            $Designation=$_POST['Designation'];		   
		    $fname=$_POST['fname'];
		    $lname=$_POST['lname'];
			$contact=$_POST['phone'];
			$nic=$_POST['nic'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$dob=$_POST['dob'];
			$rquestion=$_POST['rquestion'];
			$ranswer=$_POST['ranswer'];
		}
		
	if(isset($_POST['submit']))
	{
		$insertstring="INSERT INTO customer(Designation,FName,LName,NIC,DOB,contact_NO,email,password,rquestion,ranswer) VALUES ('$Designation','$fname','$lname','$nic','$dob','$contact','$email','$password','$rquestion','$ranswer')";

//	echo "$insertstring";
	
	if(!mysqli_query($con,$insertstring))
	{
		die('Error in adding: '. mysqli_error($con));
	}
	else header('Location: home1.html'); 

		//echo "1 record added ....!";
	
	}
	

 
?>