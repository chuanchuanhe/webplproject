<!--Created  By Chuanchuan He, Shen Yan, and Xiaoyu Cheng-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grids and Questions</title>   
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>

<?php session_start(); // make sessions available ?>

<?php
if (isset($_SESSION['user']))
{
?>
    <div id="simpleModal" class="modal">
        <div class="modal-content">
            <span class="closeBtn">&times;</span>
                <form method="get" onsubmit="return is_checked()" id="form_1">
                    <p id="question">Scientific name for an animal with a pouch?</p>
                    <input type="radio" name="question" value="Marsupial" id="pouch_marsupial"><label>Marsupial</label>
                    <input type="radio" name="question" value="Primates" id="pouch_primates"><label>Primates</label>
                    <input type="radio" name="question" value="Monotremes" id="pouch_monotremes"><lable>Monotremes</lable>
                    <br>
                    <input class="submit_button" type ="submit" value ="Submit"/> <!--type="button"-->
                    <p id="message"></p>
                </form>
        </div>
    </div>
    <div style="text-align: center">
        <h1><?php echo $_SESSION['user'];?>, Choose Your Question!</h1>
    </div>
    <div style="text-align: center">
        <h2 style="color:cadetblue"> Total Score: </h2>
    </div>
    <table align="center" border="1" width="600" height="450">
        <tr>
            <td>$100</td>
            <td><button type="button" id="modalBtn" class="button">$100</button></td> 
            <td>$100</td>
            <td>$100</td>
            <td>$100</td>
            <td>$100</td>
        </tr>
        <tr>
            <td>$200</td>
            <td>$200</td>
            <td>$200</td>
            <td>$200</td>
            <td>$200</td>
            <td>$200</td>
        </tr>
        <tr>
            <td>$400</td>
            <td>$400</td>
            <td>$400</td>
            <td>$400</td>
            <td>$400</td>
            <td>$400</td>
        </tr>
        <tr>
            <td>$800</td>
            <td>$800</td>
            <td>$800</td>
            <td>$800</td>
            <td>$800</td>
            <td>$800</td>
        </tr>
        <tr>
            <td>$1000</td>
            <td>$1000</td>
            <td>$1000</td>
            <td>$1000</td>
            <td>$1000</td>
            <td>$1000</td>
        </tr>
    </table>
    <br>
    <br>
    <div style="text-align: center;">
        <a id ="endgame" style="text-transform: uppercase;
        outline: 0;background: #4CAF50; 
        width: 12%;
        border: 0;
        padding:15px;
        color: #FFFFFF;
        text-decoration:none; 
        font-size: 14px;
        cursor: pointer;" 
        href="Endgame.php"> End Game
        </a>
    </div>
    <br>
    <br>
    <script src="js/main.js"></script> <!--link to my JS file-->
<?php
}
else
   header('Location:index.php'); 
?>

</body>
</html>