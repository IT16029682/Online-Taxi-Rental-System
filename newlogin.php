<!DOCTYPE html>
<html>
<head>
</head>

<?php
   require 'connect.php';
   session_start();
 
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username=="senevirathnehasitha@gmail.com" and $password="hps")
        {
            header('Location: adminpage.html');           
        }

        else if(isset($_POST['submit']))
      {
        
        $sql="SELECT * FROM customer where email='$username'";

        $result=mysqli_query($con,$sql);
                                 
            while($row=mysqli_fetch_assoc($result))
              { 
                if ($row['password']==$password)
                 {
                   $_SESSION['user']=$row['FName'];
                   $_SESSION['CID']=$row['cusID'];
                        header('Location: home2.php'); 
                 }

                 else
                    {
                      header('Location: home3.html');
                    }                  
                
                
              }           
                      
          
               
                   
    }
?>
</body>
</html>