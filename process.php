<?php 
     
   $username=$_POST['user'];
   $password=$_POST['pass'];

   //to prevent injection
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   
    //connecting to database
   $con = mysqli_connect("localhost","root","","login");
   

   $result = mysqli_query($con,"select * from users where username='$username' and password= '$password' ") 

   or die("Failed to query database".mysqli_error());

   $row = mysqli_fetch_array($result);

    // user & pass are inserted in database manually  
   
   if ($row['username'] == $username && $row['password'] == $password) {
        echo "Login successful!".$row['username'];
   } 
   


   else {
   	    echo "Failed to login :(";
   }
   

?>