<?php 
  $db = mysqli_connect('localhost', 'root', '', 'benartdatabase');
  $username = "";
  $email = "";
  if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $existname="benart";


    $sql_u = "SELECT * FROM client WHERE username='$username'";
    $sql_e = "SELECT * FROM client WHERE email='$email'";
    $existname="SELECT * FROM client WHERE username='benart'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);
    $existname= mysqli_query($db, $sql_u);
    if ((mysqli_num_rows($res_u) > 0) || (mysqli_num_rows($existname) =='benart')) 
    {
      $name_error = "Sorry... username already taken";  
    }
    else if(mysqli_num_rows($res_e) > 0)
    {
      $email_error = "Sorry... email already taken"; 

    }
       
  
     
    else{
           $query = "INSERT INTO client (username, email, password) 
                VALUES ('$username', '$email', '".md5($password)."')";
           $results = mysqli_query($db, $query);
           
           header('location:home.html');

           
           exit();
    }
  }
?>
