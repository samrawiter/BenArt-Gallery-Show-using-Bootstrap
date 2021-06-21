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
</head>

<style>
html{
  background-color: rgba(0,0,0,0);
}
 .carousel-item{
                 margin-top: 0px;

        }
 .caption{
       margin-top: 20px;
     }
     .footer_area{
      margin-top: 0px;
     
      background:rgba(0,0,0,.5)
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


/*
::::::::::::::::::::::::::::::::::::::::::::::::::::
Custom media queries
*/
 
/* Set width to make card deck cards 100% width */

 
img {
  border:0;
}

h1 {
  margin-top:40px;
  color:#a3a9ac;
}

#main {
  position:relative;
  width:100%;
  max-width:12000px;
  right:0;
  left:0;
  margin:0 auto auto auto;
background-color: white;
  min-height:100%;
  box-shadow: 0 2px 2px 0 rgba(0,0,0,.1);
}
.margin {
  margin:40 0px;
}
#pagination {
  position:relative;
  margin:70px 0;
}
.display-none {
  display:none;
}

#pageNav {
  position:relative;
  margin:20px 0;
}

#pageNav button {
  color:white;
  background: #000033
;
  padding:8px 12px;
  margin:15px 5px 5px 0;
  border:0;
  font-size:1em;
  cursor:pointer;
}
h2 {
  text-align: center;
  margin-top:40px;
  color:#fff;
}
.active {
  text-decoration:underline!important;
}
#gallery {
  position:relative;
  margin:0px 0;
}

.img-container {
  width:32.33%;
  padding:1%;
  float:left;
  left:40px;
}
.img {
  padding:0;
  height:0;
  padding-bottom:100%;
  overflow:hidden;
  box-shadow:0 .8px .8px white;
}
.clearfix {
  clear:both;
}

footer {
  font-size:.85em;
  width:100%;
  padding:20px 0;
  margin:50px 0 0 0;
  background:#333;
  color:#fff;
}

.ct a:link,
.ct a:active,
.ct a:hover,
.ct a:visited {
  color:#444;
  text-decoration:none;
}

.ad {
  margin:80px auto 80px 0;
  position:relative;
  width:auto;
  max-width:748px;
}

.ad img {
  width:100%;
  max-width:748px;
}

@media only screen and (max-width: 360px) {
.img-container {
  width:98%;
  padding:2% 1%;
} 
}

@media only screen and (min-width: 360px)and (max-width: 900px) {
.img-container {
  width:48%;
  padding:1%;
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
        <li><a class="dropdown-item" href="LANDSCAPE.php">LANDSCAPE</a></li>
          <li><a class="dropdown-item" href="DIGITAL.php">DIGITAL</a></li>
          <li><a class="dropdown-item" href="MODERN.php">MODERN</a></li>
          <li><a class="dropdown-item" href="gallery.php">PORTRATE</a></li>

        </ul>
</li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">CUSTOM</a>
            </li>
           
        </ul>
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="register.php">SIGN UP/IN</a>
            </li>
           
        </ul>
    </div>
</nav>


<div id="main">



<div class="margin">

<!-- #pagination start 
<a href="https://coding-tips.com/php/paginated-responsive-image-gallery/">
  Go to the tutorial
</a>-->
<div id="pagination"><!-- #pagination start -->

<?php
include_once('dbcon/dbcon.php');//Include the database connection

//////FIRST WE SET UP THE TOTAL images PER PAGE & CALCULATIONS:
$per_page = 12;// Number of images per page, change for a different number of images per page

// Get the page and offset value:
if (isset($_GET['page'])) {
$page = $_GET['page'] - 1;
$offset = $page * $per_page;
}
else {
$page = 0;
$offset = 0;
} 

// Count the total number of images in the table ordering by their id's ascending:
$images = "SELECT count(id) FROM MODERN ORDER by id ASC";
$result = mysqli_query($dbCon, $images);
$row = mysqli_fetch_array($result);
$total_images = $row[0];

// Calculate the number of pages:
if ($total_images > $per_page) {//If there is more than one page
$pages_total = ceil($total_images / $per_page);
$page_up = $page + 2;
$page_down = $page;
$display ='';//leave the display variable empty so it doesn't hide anything
} 
else {//Else if there is only one page
$pages = 1;
$pages_total = 1;
$display = ' class="display-none"';//class to hide page count and buttons if only one page
} 

////// THEN WE DISPLAY THE PAGE COUNT AND BUTTONS:


$i = 1;//Set the $i counting variable to 1

echo '<div id="pageNav"'.$display.'>';//our $display variable will do nothing if more than one page

// Show the page buttons:
if ($page) {
echo '<a href="MODERN.php"><button><<</button></a>';//Button for first page [<<]
echo '<a href="MODERN.php?page='.$page_down.'"><button><</button></a>';//Button for previous page [<]
} 

for ($i=1;$i<=$pages_total;$i++) {
if(($i==$page+1)) {
echo '<a href="MODERN.php?page='.$i.'"><button class="active">'.$i.'</button></a>';//Button for active page, underlined using 'active' class
}

//In this next if statement, calculate how many buttons you'd like to show. You can remove to show only the active button and first, prev, next and last buttons:
if(($i!=$page+1)&&($i<=$page+3)&&($i>=$page-1)) {//This is set for two below and two above the current page
echo '<a href="MODERN.php?page='.$i.'"><button>'.$i.'</button></a>'; }
} 

if (($page + 1) != $pages_total) {
echo '<a href="MODERN.php?page='.$page_up.'"><button>></button></a>';//Button for next page [>]
echo '<a href="MODERN.php?page='.$pages_total.'"><button>>></button></a>';//Button for last page [>>]
}
echo "</div>";// #pageNav end

echo '<div id="gallery">';// Gallery start

// DISPLAY THE images:
//Select the images from the table limited as per our $offet and $per_page total:
$result = mysqli_query($dbCon, "SELECT * FROM MODERN ORDER by id ASC LIMIT $offset, $per_page");
while($row = mysqli_fetch_array($result)) {//Open the while array loop

//Define the image variable:
$image=$row['img_dir'];

echo '<div class="img-container">';
echo '<div class="img">';

echo '<a href="'.$image.'">';
echo "<img src='{$row['img_dir']}'width='100%'height='300px'>";
echo '</a>';

echo '</div>';
echo '</div>';// .img-container end
}//Close the while array loop

echo '</div>';// Gallery end

echo '<div class="clearfix"></div>';// Gallery end

?>


</div>
</div>


</div><!-- #main end -->
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
                        <p>Copyright @2019 </p>
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