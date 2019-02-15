<!--
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University
-->

<! DOCTYPE html>
<html lang="en">
<html>
	<head>
			<meta charset="utf-8">
			<title>Login using mySQL | PHP Programming</title>
			<meta name="description" content="">
  		<meta name="author" content="teoespero">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
				<div class="col-sm-6">
					<div class="form-group">
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

								if(!$connection){
									die("Database connection failed.");
								}

								$sqlCode = "insert into tblUsers 
											(
												username,
												password
											) 
											values (
												'$username',
												'$password'
											)";

								$result = mysqli_query($connection, $sqlCode);
								if(!$result){
									die('Query failed.' . mysqli_error());
								}
								else{
									echo $username, " info has been added.";
								}
							}
						?>
					</div>
				</div>
		</div>

	</body>
</html>


