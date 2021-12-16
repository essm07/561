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
		$fname      = $_REQUEST['fname'];
		$lname      = $_REQUEST['lname'];
		$email      = $_REQUEST['eml'];
		$streetadd  = $_REQUEST['address'];
		$state      = $_REQUEST['state'];
		$city       = $_REQUEST['city'];
		$zipcode    = $_REQUEST['zip'];
		$NameOnCard = $_REQUEST['chname'];
		$cardNum    = $_REQUEST['cardnumber'];
		$ExpDate    = $_REQUEST['expire'];
		$CVV        = $_REQUEST['crv'];
		$quantit    = $_REQUEST['quantity'];




		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO shipinfo VALUES ('$fname','$lname','$email','$streetadd', '$state','$city','$zipcode','$NameOnCard','$cardNum','$ExpDate','$CVV' ,  '$quantit')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n $fname\n $lname\n");
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
