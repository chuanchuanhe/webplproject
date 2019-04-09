<!--citation:
https://www.youtube.com/watch?v=6ophW7Ask_0
https://www.youtube.com/watch?v=yafNKsqZ4cA
https://www.youtube.com/watch?v=GAOBXGPuKqo
https://codeburst.io/javascript-arrow-functions-for-beginners-926947fc0cdc
http://helephant.com/2008/08/23/javascript-anonymous-functions/
https://appendto.com/2016/04/javascript-redirect-how-to-redirect-a-web-page-with-javascript/
https://www.youtube.com/watch?v=aIsu9SPcGbU
-->
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
    <div style="text-align: center;">
        <h1><?php echo $_SESSION['user'];?>, Choose Your Category :)</h1>
    </div>
    <div>
    <table align="center" border="1" >
        <tr>
            <td><a id="value" href="animal.php">Animals</a></td>
            <td>Games</td>
            <td>History</td>
        </tr>
        <tr>
            <td>Techs</td>
            <td>Movies</td>
            <td>Musics</td>
        </tr>
        <tr>
            <td>Sports</td>
            <td>Literature</td>
            <td>Science</td>
        </tr>
    </table>
    </div>
<?php
}
else
   header('Location:index.php'); 
?>

</body>
</html>