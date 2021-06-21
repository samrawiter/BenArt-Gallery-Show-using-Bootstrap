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
  <link rel="stylesheet" type="text/css" href="css/logmain.css">

     <style>
    


* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

.mySlides img{

  width:100%;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


  </style>
<style>
  h5 {
  display: inline-block;
  padding: 10px;
  background: #B9121B;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.p {
  text-align: center;
  padding-top: 40px;
  font-size: 13px;
}
</style> 
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
}
.paragrap svg.svg-inline--fa:hover{
color:#1ebba3 !important;
}
hr.socket{
width:100%;
border-top:.2rem solid #666b71;
margin-top:3rem;
}   



    .navbar li{
    font-size: 20px;
}
.abs-center-x {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);}

  
.dropdown-menu{
    background-color: rgba(0,0,0,0.5);
}
.dropdown-item{
        background-color: #40474e;

}
.dropdown-item li{
        text-decoration-color: yellow;

}

.dropdown-menu a{
    color: white;
}
.navbar-dark .navbar-nav .nav-link{
  color: white;
}
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
color:#1ebba3;
}
.dropdown-menu a:hover{
color:#1ebba3;
}

/* Small devices (landscape phones, 544px and up) */
@media (max-width: 544px) {  
 .navbar li{font-size:1.3rem;} /*1rem = 16px*/
}
 
/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {  
  .navbar li {font-size:0.8rem;} /*1rem = 16px*/
}
 .copy_right{
  color: white;
 }

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



    .navbar li{
    font-size: 20px;
}
.abs-center-x {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);}

  
.dropdown-menu{
    background-color: rgba(0,0,0,0.5);
}
.dropdown-item{
        background-color: #40474e;

}
.dropdown-item li{
        text-decoration-color: yellow;

}

.dropdown-menu a{
    color: white;
}
.navbar-dark .navbar-nav .nav-link{
  color: white;
}
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
color:#1ebba3;
}
.dropdown-menu a:hover{
color:#1ebba3;
}

/* Small devices (landscape phones, 544px and up) */
@media (max-width: 544px) {  
 .navbar li{font-size:1.3rem;} /*1rem = 16px*/
}
 
/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {  
  .navbar li {font-size:0.8rem;} /*1rem = 16px*/
}
 .copy_right{
  color: white;
 }



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
}
.paragrap svg.svg-inline--fa:hover{
color:#1ebba3 !important;
}
hr.socket{
width:100%;
border-top:.2rem solid #666b71;
margin-top:3rem;
}   



    .navbar li{
    font-size: 20px;
}
.abs-center-x {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);}

  
.dropdown-menu{
    background-color: rgba(0,0,0,0.5);
}
.dropdown-item{
        background-color: #40474e;

}
.dropdown-item li{
        text-decoration-color: yellow;

}

.dropdown-menu a{
    color: white;
}
.navbar-dark .navbar-nav .nav-link{
  color: white;
}
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover{
color:#1ebba3;
}
.dropdown-menu a:hover{
color:#1ebba3;
}

/* Small devices (landscape phones, 544px and up) */
@media (max-width: 544px) {  
 .navbar li{font-size:1.3rem;} /*1rem = 16px*/
}
 
/* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
@media (min-width: 768px) {  
  .navbar li {font-size:0.8rem;} /*1rem = 16px*/
}
 .copy_right{
  color: white;
 }


</style></head>
<body data-spy="scroll" data-target="#navbarReponsive">
<!-- example 1 - using absolute position for center -->



<!-- 
example 3 - Navbar with brand left, links on center and right that collapse into the vert mobile menu
-->

<nav class="navbar navbar-light navbar-expand-md  justify-content-center navbar-dark bg-dark fixed-top">
    <a href="/" class="navbar-brand d-flex w-50 mr-auto"><img class="d-block w-15" src="bemimg/8BXUolDngpYGnJgGnaRLIvceUlY.jpg" style="height:55px" data-color="firebrick" alt="Second Image"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="navbar-nav w-100 justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="home.html">HOME</a>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">ABOUT US</a>
            </li>
         <li class=" list-inline-item nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GALLERY
        </a> 
         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="gallery.php">LANDSCAPE</a></li>
          <li><a class="dropdown-item" href="gallery.php">DIGITAL</a></li>
          <li><a class="dropdown-item" href="gallery.php">MODERN</a></li>
          <li><a class="dropdown-item" href="gallery.php">PORTRATE</a></li>

        </ul>
</li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">CUSTOM</a>
            </li>
           
        </ul>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="register.php">SIGN UP</a>
            </li>
           
        </ul>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="bemimg/836GizKcWWYIfAlLTYmDLiWOIBY.jpg" style="height:400px"data-color="lightblue" alt="First Image">
      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bemimg/8a3nLiTnzTLhExMqYkbrhCiAhxi.jpg" style="height:400px" data-color="firebrick" alt="Second Image">
      
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="bemimg/8CfdKrXZHtQjdOzLUKSFokDAghX.jpg" style="height:400px" data-color="violet" alt="Third Image">
    
    </div>
  </div>
  <!-- Controls -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>


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
    <p><a href="#">Forgot password?</a></p>
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
</body>
</html>