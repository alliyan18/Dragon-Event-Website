<?php

$conn=mysqli_connect("localhost","root","","dragon");
if(isset($_POST['submit']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$Phone = $_POST['Phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$Message = $_POST['Message'];

	$insertquery =  "INSERT into contactform(firstname, lastname, phonenumber, email, address, Message) values('{$firstname}', '{$lastname}', '{$Phone}', '{$email}', '{$address}', '{$Message}')" ;


	$result = mysqli_query($conn, $insertquery);

	if($result)
	{
		?>
		<script>
		alert("Message Submitted Successfully.");
	    </script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Message Not Submitted.");
		</script>
		<?php
	}

}
?>