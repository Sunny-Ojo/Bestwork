<?php 
session_start();
if(isset($_POST['submit'])){
// header('location: index.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'hng_task2');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$s = " SELECT * FROM reg_user WHERE email = '$email' && password ='$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
	$_SESSION['username'] = $username;
	header('location: dashboard.php');
}else{
header('location:signup.php');
}
}
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Register | Welcome</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 offset-md-6 form-div">
          <h1 class="text-lg-center alert-danger"><b>TEAM SMOOTH</b></h1>

          <form action="login.php" method="post">
            <h3 class="text-center">Login</h3>
            <div class="form-group">
              <label for="email">Email:</label>
              <input
                type="text"
                name="email"
                id="email"
                class="form-control form-control-lg"
                placeholder="Enter Your Email"
              />
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control form-control-lg"
                placeholder="Enter Your password"
              />
            </div>

            <div class="form-group">
              <button
                type="submit"
                name="submit"
                class="btn btn-primary btn-lg btn-block"
              >
                Sign In
              </button>
            </div>
            <p class="text-center">
              Don't Have An Account?
              <b><a class="signup_btn" href="signup.html">Sign Up</a></b>
            </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
