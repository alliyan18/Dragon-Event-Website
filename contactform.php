
<!DOCTYPE html>
<html>
<head>
	<title>CONTACT FORM</title>
	<style>
		*{
			background-color: #f2f2f2;
		}
		.form5 form{
			border:1px solid white;
			margin-right: 290px;
			margin-left: 290px;
			padding: 120px;
			padding-top: 22px;
			padding-bottom: 22px;
			background-color: white;
		}

		label, textarea, input, h1{
			background-color: white;
		}
		input[type=text]
		{
			width: 100%;
            padding: 10px 20px;
            margin: 2px 0;
            border-style: groove;
            box-sizing: border-box;
		}

		input[type=email],input[type=value]{
			width: 100%;
            padding: 10px 20px;
            margin: 2px 0;
            border-style: groove;
            box-sizing: border-box;
		}

		textarea{
			width: 100%;
            padding: 10px 20px;
            margin: 2px 0;
            border-style: groove;
            box-sizing: border-box;
		}
		input[type=submit]
		{
			width: 100%;
			 background-color: #DC143C;
             border-radius: 5px;
             border:none;
             color: white;
             padding: 16px 210px;
             font-size: 24px;
             text-decoration: none;
             margin: 4px 2px;
             cursor: pointer;

		}
		input[type=submit]:hover{
			background-color: black;

		}
		.form5 label{
			font-family: serif;
		}

		h1{
			text-align: center;
		}

	</style>
	
</head>
<body>

	<div class="form5">
	<form id="contact-form" method="POST" action="contact.php">
		<h1>Send Message</h1>
		<label>First Name</label><br><br>
		<input type="text" name="firstname" placeholder="First Name" required><br><br>
		<label>Last Name</label><br><br>
		<input type="text" name="lastname" placeholder="Last Name" required><br><br>
		<label>Phone Number</label><br><br>
		<input type="value" name="Phone" placeholder="Phone Number" required><br><br>
		<label>Email</label><br><br>
		<input type="email" name="email" placeholder="Email" required><br><br>
		<label>Address</label><br><br>
		<input type="text" name="address" placeholder="Address" required><br><br>
		<label>Message</label><br><br>
		<textarea name="Message" placeholder="Message" rows="10" required></textarea><br><br>
		<input type="submit"  name="submit" value="SUBMIT"><br><br>
	</form>
	</div>
</body>
</html>