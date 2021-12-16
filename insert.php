<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "compe_561_website");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$user_name = $_REQUEST['user_name'];
		$e_mail = $_REQUEST['e_mail'];
		$pass_word = $_REQUEST['pass_word'];
		$confirm_pass = $_REQUEST['confirm_pass'];
		$dateit = $_REQUEST['dateit'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sinup VALUES ('$user_name','$e_mail','$pass_word','$confirm_pass', '$dateit')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thank you for Signing Up, we are happy to have you !!</h3>";

			echo nl2br("\n$user_name\n $e_mail\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
