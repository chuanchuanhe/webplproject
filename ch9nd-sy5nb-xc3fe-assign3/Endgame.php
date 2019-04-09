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
    <div class="container" style="text-align: center">
        <h1>The End </h1>
    </div>
    
  <?php
// Set session variables can be removed by specifying their element name to unset() function.
// A session can be completely terminated by calling the session_destroy() function.

// Check if any session variables are set and retrieve all stored names and values
if (count($_SESSION) > 0)
{   
   foreach ($_SESSION as $key => $value)
   {
      // Deletes the variable (array element) where the value is stored in this PHP.
      // However, the session object still remains on the server.    	
      unset($_SESSION[$key]);
   }      
   session_destroy();     // complete terminate the session
}
?>

<?php
}
else
   header('Location:index.php'); 
?>

</body>
</html>