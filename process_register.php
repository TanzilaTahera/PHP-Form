<?php
//connecting to database
   $con = mysqli_connect("localhost","root","","login");
 
   if(isset($_POST['register'])) { 
      session_start();   
      $username = $_POST['user'];
      $pass = $_POST['pass'];
      $_SESSION['username']=$username;


               
    //insert data to database
    $result = mysqli_query($con, "INSERT INTO users(username,password) VALUES('$username','$pass')");
        
      
     	    header("location: home.php");  //redirecting to home page
	
}

?>