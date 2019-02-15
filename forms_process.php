<!--
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University
-->


<!-- This our php code that handles the validation -->
<?php

	// this action happens when the 'Submit' button
	// is clicked
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// if($username && $password){
		// 	echo $username, " and ", $password;
		// }
		// else{
		// 	echo "None were passed.";
		// }

		$connection = mysqli_connect('localhost', 'root', '','dbDatabase01');

		if($connection){
			echo "We are connected.";
		}
		else{
			die("Database connection failed.");
		}

	}
?>
