<?php 
if(isset($_POST["submit"])){
  session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'hng_task2');
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$p = " SELECT * from reg_user where email = '$email'";
$result = mysqli_query($con, $p);
$num = mysqli_num_rows($result);
if ($num == 1) {
	echo "<script>alert('Email Already Taken')</script>";
}else{
	$reg= "INSERT INTO reg_user(username , email , password ) values ('$username' ,  '$email', '$password')";
  mysqli_query($con, $reg);
  echo "<script>alert('Registration Successful, click ok while we redirect you to the login page' )</script>";
  header("refresh:2; url=login.php");

}
}
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta
      name="description"
      content="A simple login and sign-up form using html, css and bootstrap"
    />
    <meta
      name="keywords"
      content="login form, sign-up form, simple login and sign-up page"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Register</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 offset-md-6 form-div">
          <h1 class="text-lg-center alert-danger"><b>TEAM SMOOTH</b></h1>
          <form action="signup.php" method="post">
            <h3 class="text-center">Register</h3>

            <div class="form-group">
              <label for="username">Username:</label>
              <input
                type="text"
                name="username"
                id="username"
                class="form-control form-control-lg"
                placeholder="Example: Sunny Melvin"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control form-control-lg"
                required
                placeholder="Example: me@gmail.com"
              />
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control form-control-lg"
                placeholder="Example: *****"
                required
                
              />
            </div>
            <!-- <div class="form-group">
              <label for="password_confirm">Confirm Password:</label>
              <input
                type="password"
                name="password"
                id="password"
                class="form-control form-control-lg"
                placeholder="Example: *****"
                required
              />
            </div> -->
            <div class="form-group">
              <button
                type="submit"
                name="submit"
                class="btn btn-primary btn-lg btn-block"
              >
                Submit
              </button>
            </div>
            <p class="text-center">
              Already a Member?
              <b><a class="signup_btn" href="login.php">Sign In</a></b>
            </p>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
