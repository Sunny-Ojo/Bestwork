<?php 
session_start();
if(isset($_POST['submit'])){
  $con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'hng_task2');
$email = $_POST['email'];
$password = $_POST['password'];
$p = " SELECT * FROM reg_user WHERE email = '$email' && password ='$password'";
$result = mysqli_query($con, $p);
$num = mysqli_num_rows($result);
if ($num == 1) {
	header('location: dashboard.php');
}else{
 echo "<script>alert('username or password incorrect')</script>";
 header("url=signup.php");
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
                type="email"
                name="email"
                id="email"
                class="form-control form-control-lg"
                placeholder="Enter Your Email"
              required/>
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control form-control-lg"
                placeholder="Enter Your password"
             required />
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
              <b><a class="signup_btn" href="signup.php">Sign Up</a></b>
            </p>
            <p class="text-center"><a class="pwd_reset" href="#">
           Forgot Password?
           </a></p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
