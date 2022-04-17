<?php

include 'config.php';

session_start();

error_reporting(0);

if(isset($_SESSION['username'])){
	header("Location: dragonbooking.php");
}


if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	 $sql = "SELECT * FROM users WHERE email = '$email' AND password= '$password'";
	$result = mysqli_query($conn, $sql);
	if($result->num_rows > 0)
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row ['username'];
        
    }

	 else
	{
		echo "<script>alert('Woops! Email Or Password is Wrong.')</script>";
	}

}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="CarSolution.css">
</head>
<body id="backc">
	<div class="boundry">
		<form action="login.php" method="POST">
			<label id="log">Log in</label>
			<br><br>
			
			<label>
				Email<br><br>
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</label><br><br>
			

			<label>
				Password<br><br>
				<input type="Password" placeholder="Password" name="password" value="<?php echo $_POST['Password']; ?>" required>
			</label>
			
			<br><br>
			<button name="submit">Login</button><br><br>
			<p class="login-register-text">Don't have an account? <a href="createaccount.php">Register Here</a></p>
	   </form>
	</div>
</body>
</html>



