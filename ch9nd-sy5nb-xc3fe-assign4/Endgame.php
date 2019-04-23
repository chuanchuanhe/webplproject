<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>

<body>

<?php session_start(); // make sessions available ?>

<?php
if (isset($_SESSION['user']))
{
?>
<?php
        $host="localhost";
        $user="root";
        $password="";
        $db="jeopardy";

        $score1 = 0; 

        $con = mysqli_connect($host, $user, $password);
        mysqli_select_db($con, $db); 

        $username = $_SESSION['user'];
        $password = $_SESSION['pwd']; 
        $sql = "select score from loginform where User= '$username' && Password= '$password'"; 
        $result = mysqli_query($con, $sql); 
        while ($row = $result->fetch_assoc())
            {
                foreach($row as $value)  
                {$score1 = $value;}
            }
    ?>
    <div class="container" style="text-align: center">
        <h1>The End</h1>
        <h2>Your Total Score is: 10<h2>
    </div>
    
  <?php
// Set session variables can be removed by specifying their element name to unset() function.
// A session can be completely terminated by calling the session_destroy() function.

// Check if any session variables are set and retrieve all stored names and values
if (count($_SESSION) > 0 && count($_COOKIE) > 0)
{   
   foreach ($_SESSION as $key => $value)
   {
      // Deletes the variable (array element) where the value is stored in this PHP.
      // However, the session object still remains on the server.    	
      unset($_SESSION[$key]);
   }      
   session_destroy();     // complete terminate the session

   foreach ($_COOKIE as $key => $value)
   {
   	  // Deletes the variable (array element) where the value is stored in this PHP.
   	  // However, the original cookie still remains intact in the browser.
   	  // unset($_COOKIE[$key]);    
   	
      // To completely remove cookies from the client, set the expiration time to be in the past
      setcookie($key, '', time() - 7200);  
   }
}
?>

<?php
}
else
   header('Location:index.php'); 
?>

</body>
</html>