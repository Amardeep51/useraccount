<?php
include("config.php");
$firstname=isset($_POST['firstname']) ? $_POST['firstname'] :'';
$lastname=isset($_POST['lastname']) ? $_POST['lastname']:'';
$email=isset($_POST['email']) ? $_POST['email']:'';
$phonenumber=isset($_POST['phonenumber']) ? $_POST['phonenumber']:'';
$password=isset($_POST['password']) ? $_POST['password']:'';
mysqli_select_db($con,'useraccounts');
$q="insert into users(firstname,lastname,email,phonenumber,password) values('$firstname','$lastname','$email','$phonenumber','$password')";
$ok=mysqli_query($con,$q);
if($ok==1)
{
	echo"Your New User has been Updated Successfully";
}
else
{
	echo"User ID Already Exists!!";
}
mysqli_close($con);
?>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
					
				</div>
			</div>
		</div>
	</form>
</div>

</body>
</html>