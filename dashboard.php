<?php
session_start();
$username =  $_SESSION["username"] ;
$logout = "<b><a href='login.php'>Logout</a></b>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Welcome to Team Smooth </title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 alert-success offset-2 text-center msg"><h2>THANK YOU FOR SIGNING UP WITH TEAM SMOOTH</h2><br><?php
echo $logout;
?>

        </div>
        </div>
    </div>

</body>
</html>