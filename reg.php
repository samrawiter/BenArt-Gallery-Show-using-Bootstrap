<?php include('process.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
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
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/logmain.css">

<script src="slideimg.js"></script>
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
body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
</style> 
</head>

<body data-spy="scroll" data-target="#navbarReponsive">
<nav class="navbar navbar-light navbar-expand-md  justify-content-center navbar-dark bg-dark fixed-top">
    <img class="d-block w-15" src="bemimg/8BXUolDngpYGnJgGnaRLIvceUlY.jpg" style="height:55px" data-color="firebrick" alt="Second Image"> 
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            <li class="nav-item active">
                <a class="nav-link" href="#">HOME <span class="sr-only">Home</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="//codeply.com">ABOUT</a>
            </li>
                   <li class=" list-inline-item nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GALLERY
        </a> 
         <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="uploads/display.php">LANDSCAPE</a></li>
          <li><a class="dropdown-item" href="#">DIGITAL</a></li>
          <li><a class="dropdown-item" href="#">MODERN</a></li>
          <li><a class="dropdown-item" href="#">PORTRATE</a></li>

        </ul>
</li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">CUSTOME</a> 
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
            <li class="nav-item"><a class="nav-link" href="">Sign Up/In</a> </li>
        </ul>
    </div>
</nav>


 

    <div class= "caption text-center">
  <h1> Welcom to Ben Art's</h1>

</div>
<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
  <form method="post" action="register.php" class="login100-form validate-form" id="register_form">
     <span class="login100-form-title p-b-55">
            Register
          </span>
 <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid username is required">            <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
            <input class="input100" type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
            <?php if (isset($name_error)): ?>
              <span><?php echo $name_error; ?></span>
            <?php endif ?>
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
            </div>
     </div>
        <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
            <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
              <input  class="input100" type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
              <?php if (isset($email_error)): ?>
                <span><?php echo $email_error; ?></span>
              <?php endif ?>
              <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
            </div>
     </div>
<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">  
           
                <input class="input100"  type="password"  placeholder="Password" name="password">
                 <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
              
    </div>
          <div class="container-login100-form-btn p-t-25">
            
                <button class="login100-form-btn" type="submit"  class="button" name="register" id="reg_btn">Register</button>
              
  </div>





  </form>
  
</div></div>
</div>




<!--- end client section -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="all.js"></script>
<script src="jss.js"></script>
<script src="popup.js"></script>


<!--- End of Script Source Files -->
 

</body>
</html>


