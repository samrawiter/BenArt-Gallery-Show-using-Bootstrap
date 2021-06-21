
<!DOCTYPE html>
<html>
<head>
	
	
	<title>BEN ART</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

	<title>BEN ART</title>
<script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style >
	.body{
		background-color: red;
	}
	.table {
width: 100% !important;


	}
	.table img{
width: 100% !important;

	}
</style>
</head>
<body>

<div class="container" id ="uploadfile" >
		<table class="table  table-bordered table-responsive">  
	<?php
	$i=0;
$mysqli=new mysqli("localhost", "root", "","benartdatabase");
$table='displayimage';
$result = $mysqli->query( "SELECT * FROM $table") or die(mysqli-error) ;
$i=0;
while($row= mysqli_fetch_assoc($result)){

	if($i%3==0){

	   echo"<tr>";

}
    echo"<td height='100px'> <img src='{$row['img_dir']}' width='150%'height='150px'></td>";
if($i%3==2)
{ 

	echo"</tr>";
}
$i++;
}


?>
		</table>

</a>
</div>

</body>
</html>
