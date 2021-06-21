<?php session_start(); ?>
<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login V11</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
  
 <form class="login100-form validate-form" action="#" method="post">
    <span class="login100-form-title p-b-55">
            Login
          </span>
  
      <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
    <input class="input100" type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
    </div>
    
    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
    <input class="input100" type="password" name="pass" required="required" placeholder="Password" required></input>
    <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
    </div>
    
        <div class="container-login100-form-btn p-t-25">
    <input type="submit" class="login100-form-btn"  title="Log In" name="login" value="Login"></input>
    </div>
  </form>
  <?php
  if (isset($_POST['login']))
    {
      $username = mysqli_real_escape_string($con, $_POST['user']);
      $password = mysqli_real_escape_string($con, $_POST['pass']);
      
      $query    = mysqli_query($con, "SELECT * FROM client WHERE  password='$password' and username='$username'");
      $row    = mysqli_fetch_array($query);
      $num_row  = mysqli_num_rows($query);
      
      if ($num_row > 0) 
        {     
          $_SESSION['id']=$row['id'];
          header('location:home.php');
          
        }
      else
        {
          echo 'Invalid Username and Password Combination';
        }
    }
  ?>
 <div class="reminder">
    <p>Not a member? <a href="#">Sign up now</a></p>
    <p><a href="#">Forgot password?</a></p>
  </div>
  </div>
</div>
</div>
 <script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="all.js"></script>
<script src="jss.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
</body>
</html>