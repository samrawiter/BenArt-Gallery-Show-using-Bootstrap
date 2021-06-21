<?php session_start(); ?>
<?php include('dbcon.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BEN ART</title>
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="googlecss.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="loginstyle.css">

<script src="slideimg.js"></script>

  <link rel="stylesheet" href="css/fixed.css">
<style >

#rc_logo {
 left: 30px;
 padding: 22px;
 position: absolute;
 color: #fff;
 font-size: 19px;
 font-family: Poppins;
 text-decoration: none;
}

#rc_logo a { 
color: inherit; 
text-decoration: none;
} 
.right_nav{

  right: 30px;
 padding: 22px;
 position: absolute;
 color: #fff;
 font-size: 19px;
 font-family: Poppins;
 text-decoration: none;
}

.right_nav a { 
color: inherit; 
text-decoration: none;
} 
.rc_nav {
  overflow: hidden;
  background-color: #363841;
  text-align: center;
  z-index: 6;
}

.rc_nav a {
 display: inline-block;
 margin-right: -4px;  /* inline-block gap fix */
 color: #fff;
 padding: 22px 22px;
 text-decoration: none;
 font-family: Poppins;
 font-size: 18px;
 -webkit-transition: background 0.3s linear;
 -moz-transition: background 0.3s linear;
 -ms-transition: background 0.3s linear;
 -o-transition: background 0.3s linear;
 transition: background 0.3s linear;
 z-index: 9;
}

.rc_nav a:hover {
  background-color: #575b69;
  color: #bdfe0e2;
}

.rc_nav .icon {
  display: none;
}

.rc_content {
  text-align: center; 
  padding-left:14px; 
  font-family: Poppins; 
  margin-top: 100px;  
  color: #8e909b;
}

.rc_nav-right {
  float: right;
}


@media screen and (max-width: 820px) {
  .rc_nav a {display: none;}
  .rc_nav a.icon {
    float: right;
    display: block;
    width: 60px;
  }
}

@media screen and (max-width: 820px) {
  .rc_nav.responsive {position: relative; top: 73px;}
  .rc_nav.responsive .icon {
    position: fixed;
    right: 0;
    top: 0;
  }
  .rc_nav.responsive a {
    float: none;
    display: block;
    text-align: center;
  }


.rc_nav a {display: none;}
  .rc_nav a.icon {
    float: right;
    display: block;
    width: 60px;
  }



  .right_nav.responsive {position: relative; top: 73px;}
  .right_nav.responsive .icon {
    position: fixed;
    right: 0;
    top: 0;
  }
  .right_nav.responsive a {
    float: none;
    display: block;
    text-align: center;
  }

}

  </style>
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
</head>
<body data-spy="scroll" data-target="#navbarReponsive">
<nav class="navbar navbar-light navbar-expand-md  justify-content-center navbar-dark bg-dark fixed-top">
    <a href="/" class="navbar-brand mr-0"><img class="d-block w-25" src="bemimg/8BXUolDngpYGnJgGnaRLIvceUlY.jpg" style="height:55px" data-color="firebrick" alt="Second Image"></a> 
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
          <li><a class="dropdown-item" href="#">LANDSCAPE</a></li>
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
      <img class="d-block w-100" src="bemimg/836GizKcWWYIfAlLTYmDLiWOIBY.jpg" style="height:500px"data-color="lightblue" alt="First Image">
      <div class="carousel-caption d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="bemimg/8a3nLiTnzTLhExMqYkbrhCiAhxi.jpg" style="height:500px" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption d-md-block">
      </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="bemimg/8CfdKrXZHtQjdOzLUKSFokDAghX.jpg" style="height:500px" data-color="violet" alt="Third Image">
    <div class="carousel-caption d-md-block">
      </div>
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


<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Login here</h3>
  
    <div class="form-item">
    <input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
    <input type="password" name="pass" required="required" placeholder="Password" required></input>
    </div>
    
    <div class="button-panel">
    <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
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
    <p>Not a member? <a href="register.php">Sign up now</a></p>
  </div>
  </div>

</div>

<div id="contact" class="offset">
<footer>
<div class="row justify-content-center">
   <div class="col-md-5 text-center">
<img src="img/nuno.png">
<p>dkaldaldhkdkdcgkfgyghfvkfvdfgvvdkguvv
dgdugdhdsvghdvkccvduvdfhgvckdgcdckdgcvdv</p>
<strong>Contact Info</strong>
<p>(888)565-4587 <br>email@ben.com</p>
<a href="www.enrique.se43@facebook.com"target="_blank"><i class="fab fa-facebook-square"></i></a>
<a href=""target="_blank"><i class="fab fa-twitter-square"></i></a>
<a href=""target="_blank"><i class="fab fa-instagram"></i></a>
  </div>
  <hr class="socket">
  2019&copy;Ben Art!
</div>
</footer>
</div>
</body>
</html>


<!--- end client section -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="all.js"></script>
<script src="jss.js"></script>
<!--- End of Script Source Files -->
 

</body>
</html>

