<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])){
	header("Location: login.php");
}

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);


	if($password == $cpassword){
		$sql = "SELECT * FROM users WHERE email= '$email' ";
		$result = mysqli_query($conn, $sql);
		if(!$result->num_rows > 0){
			$sql = "INSERT INTO users (username, email, password)
		VALUES ('$username', '$email', '$password')";
		$result = mysqli_query($conn, $sql);
		if($result){
			echo "<script>alert('Account has been created successfully.')</script>";
			$username = "";
			$email = "";
			$_POST['password'] = " ";
			$_POST['cpassword'] = " ";
		} else{
			echo "<script>alert('Woops! Something Went Wrong.')</script>";
		}
			
		} else{
 echo "<script>alert('Email Already Exist.')</script>";
		}
		
	}
	else{
		
		echo "<script>alert('Password Not Matched')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="CarSolution.css">
</head>
<body class="back">
	<div class="singbar">
		<form class="createacc" action="" method="POST">
		<h2>Create an account</h2>
			<label id="Fullname">
				Full Name<br>
				<input type="text" placeholder="Username" value="<?php echo $username; ?>" name="username" required>
			</label><br><br>

			<label>
				Email<br>
				<input type="email" placeholder="Email" value="<?php echo $email; ?>" name="email" required>
			</label>

			<label><br><br>
				Password<br>
				<input type="Password" placeholder="Password" value="<?php echo $_POST['password']; ?>" name="password" required>
			</label>


			<label><br><br>
				Re-confirm Password<br>
				<input type="Password" placeholder="Re-confirm Password" value="<?php echo $_POST['cpassword']; ?>" name="cpassword" required>
			</label><br><br>

			<button name="submit">Create Account</button>
			<br>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a></p>
		</form>
	</div>

</body>
</html>