<?php
session_start();
$username =  $_SESSION["username"] ;
$logout = "<a href='login.php'>Logout</a>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Welcome to Team Smooth </title>
</head>
<body>
<?php
echo $logout;
?>
</body>
</html>