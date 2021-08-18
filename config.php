<html>
<head>
<?php
$servername="localhost";
$username="root";
$password='';
$db="useraccounts";

$con=new mysqli($servername,$username,$password,$db,"3308");
if ($con->connect_error)
{
die("Connection Failed".$con->connect_error);
}
?>
</head>
<body>
</body>
</html>
