<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost:3366";
$username = "root";
$password = "";
$db="university";


$conn =mysqli_connect($servername,$username,$password,$db);
// $conn = mysqli_connect("localhost","root","");
if($conn === false)
{
  die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
//	 echo "sucessfully connect";
}

?>
</body>
</html>