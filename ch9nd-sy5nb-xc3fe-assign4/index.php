<!--Jeopardy Game By Chuanchuan He, Shen Yan, and Xiaoyu Cheng-->
<?php
    session_start();    // make sessions available
?>

<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="jeopardy";

    $error = "";
    $message = "";

    $score = 0; 

    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $db); 

    if(isset($_GET['userid'])) 
    {
        $username = $_GET['userid'];
        $password = $_GET['psword'];
        //$score = 0;

        if (strlen($username) == 0)
        {
            $error  = "Please enter a username";
        }

        $sql = "select * from loginform where User= '$username' && Password= '$password'"; 

        $result = mysqli_query($con, $sql); 

        if(mysqli_num_rows($result) == 1) 
        {
            // set session attributes
            $_SESSION['user'] = $username;
            $_SESSION['pwd'] = $password;
            
            $error = ""; 

            setcookie('user', $username, time()+7200);         

            setcookie('score', $score, time()+7200);         

            header('location:category.php');
        }
        else 
        {
            if (strlen($username) == 0)
            {
                $error  = "Please enter a username"; //predefined function 
            }
            else
            {
                $error = "Wrong username or password!"; 
            }
        }
    }

    if (isset($_POST['reuserid'])) 
    {
        $reusername = $_POST['reuserid'];
        $repassword = $_POST['repsword'];
        $score = 0; 

        $sql2 = "INSERT INTO loginform (User, Password, score) VALUES('$reusername', '$repassword', '$score')"; 

        mysqli_query($con, $sql2); 

        $error = "";
        $message = "Successfuly registered! Please Login :)";
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeopardy game login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
</head>  
<body>
    <div class= "login-page">
        <h1>Jeopardy!</h1>
        <div class= "form">
            <form class="register-form" action="#" method="POST">
            <input type="text" placeholder="Username" name="reuserid"/>
            <input type="text" placeholder="Password" name="repsword"/>
            <button>Create Account</button>
            <p class="message">Already Registered? <a href="#">Login</a></p>
            </form>
            
            <form class="login-form" id="loginform" action="#" method="GET">
            <input id="username" type="text" placeholder="Username" name="userid"/>
            <input id="password" type="text" placeholder="Password" name="psword"/>
            <p style="color: red"><?php echo $error ?></p>
            <p style="color: red"><?php echo $message ?></p>
            <button>Login</button>
            <p class="message">Haven't Registered? <a href="#">Register</a></p>
            </form>
        </div>
    </div>
    
    <script src='http://code.jquery.com/jquery-3.2.1.min.js'></script>

    <script>
        $('.message a').click(function(){
            $('form').animate({height:"toggle",opacity:"toggle"},"slow"); 
        }); 
    </script>

</body>
</html>
