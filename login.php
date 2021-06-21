<?php session_start(); ?>
<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BEN ART</title>
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="googlecss.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">

<style>

 .carousel-item{
                 margin-top: 0px;

        }
 .caption{
       margin-top: 20px;
     }
     .footer_area{
      background:rgba(0,0,0,0.6)!important;
     }
        
            .footer-content {
     
    padding: 50px 0 65px 0;
    border-bottom: 1px solid #eeeeee;
}

.footer-logo-area .yummy-logo {
    font-family: 'Shadows Into Light Two', cursive;
    font-size: 60px;
    margin-bottom: 0;
    padding: 0 0 20px 0;
    display: inline-block;
    color: #232d37;
}
.footer-logo-area .yummy-logo .d-block{
  width: 75px;
}

.paragrap p{
color:white;
}
.paragrap svg.svg-inline--fa{
font-size:1.6rem;
margin:1.2rem 5rem 0 0;
color:white !important;

}
.paragrap svg.svg-inline--fa:hover{
color:#1ebba3 !important;
}
hr.socket{
width:100%;
border-top:.2rem solid #666b71;
margin-top:3rem;
}   
.nav-link {
  color: white;
}

.wrap-login100{
  margin-top: 75px;
}
</style>


</head>
<body data-spy="scroll" data-target="#navbarReponsive">
<!-- example 1 - using absolute position for center -->



<!-- 
example 3 - Navbar with brand left, links on center and right that collapse into the vert mobile menu
-->

<nav class="navbar navbar-light navbar-expand-md  justify-content-center navbar-dark bg-dark fixed-top">
    <a href="/" class="navbar-brand d-flex w-50 mr-auto"><img class="d-block w-15" src="bemimg/8BXUolDngpYGnJgGnaRLIvceUlY.jpg" style="height:55px" data-color="firebrick" alt="Second Image"></a>
   
     <li class="nav-item">
                <a class="nav-link" href="home.html">HOME</a>
            </li>
  </nav>
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
              <span class="lnr lnr-user"></span>
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
      $password = md5($password);
      
if($username=="benart")
{
    $query    = mysqli_query($con, "SELECT * FROM admin WHERE  password='$password' and username='$username'");
      $row    = mysqli_fetch_array($query);
      $num_row  = mysqli_num_rows($query);
      
      if ($num_row > 0) 
        {     
          $_SESSION['user_id']=$row['user_id'];
          header('location:admin.php');
          
        }
      else
        {
          echo 'Invalid Username and Password Combination';
        }
}

      $query    = mysqli_query($con, "SELECT * FROM client WHERE  password='$password' and username='$username'");
      $row    = mysqli_fetch_array($query);
      $num_row  = mysqli_num_rows($query);
      
      if ($num_row > 0) 
        {     
          $_SESSION['user_id']=$row['user_id'];
          header('location:index.php');
          
        }
      else
        {
          echo 'Invalid Username and Password Combination';
        }
    }
  ?>
 <div class="reminder">
    <p>Not a member? <a href="register.php">Sign up now</a></p>
  </div>
  </div>
</div>
</div>

<footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content">
                        <!-- Logo Area Start -->
                        <div class="footer-logo-area text-center">
                            <a href="index.html" class="yummy-logo"><img class="d-block " src="bemimg/8BXUolDngpYGnJgGnaRLIvceUlY.jpg" style="height:80px" data-color="firebrick" alt="Second Image"> </a>
                        </div>
                        <!-- Menu Area Start -->
                       <div class="paragrap text-center" ><p>
WELLCOME TO BEN ART</p>
<p><strong>Contact Info</strong><p>
<p>(+251)921-325836 <br>ben.ave20@gmail.com</p>
<a href="http/www.enrique.se43@facebook.com"target="_blank"><i class="fab fa-facebook-square"></i></a>
<a href=""target="_blank"><i class="fab fa-twitter-square"></i></a>
<a href=""target="_blank"><i class="fab fa-instagram"></i></a>
</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p><b>Copyright @2019 </b></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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