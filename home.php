<?php
  session_start();
?>

<!DOCTYPE html>
<html>
   <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
   	   <div id="home_body">
        <div id="home">
            <h1>Welcome! You are registered!</h1>
            <h2><?php echo $_SESSION['username']; ?></h2>
        </div>
        <div id="home_footer">
             <h2><a href="logout.php">Logout</a></h2>  
        </div>
    </div>
   </body>

</html>