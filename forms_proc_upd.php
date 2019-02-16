<!--
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University
-->


<!-- This our php code that handles the validation -->
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
						<?php
							
							// call the db functions
							// that allows us to connect
							include "db.php";

							// was any information submitted
							if(isset($_POST['submit'])){

								// if info was submitted, 
								// we need to store them into variables
								$IdNo = $_POST['IdNo'];
								$username = $_POST['username'];
								$password = $_POST['password'];

								// set the allowable lengths
								// for our inputs
								$minimum = 5;
								$maximum = 10;

								// define our generic warning message
								$warning = "Update failed.";

								// check if the values supplied are within 
								// the required ranges
								if(strlen($username) > $minimum && strlen($username) < $maximum){
									if(strlen($password) > $minimum && strlen($password) < $maximum){

										// yes, so we update the table
										$sqlCode = "update tblUsers
											set
												username = '$username',
												password = '$password'
											where
												UserID = '$IdNo'";

										$result = mysqli_query($connection, $sqlCode);

										// something shitty happened
										// find out then die!!!
										if(!$result){
											die('Query failed.' . mysqli_error());
										}

										// yay! it was successful
										else{
											echo "<br>", "User ". $IdNo ." has been updated.";
										}
									}

									// no, indicate what was wrong
									else{
										echo "<h2>". $warning ."</h2>";
										echo "Password supplied is less than the minimum of ". $minimum ." characters.";
									}
								}
								else{
										echo "<h2>". $warning ."</h2>";
										echo "Username supplied is less than the minimum of ". $minimum ." characters.";
								}
							}
						?>
					</div>
				</div>
		</div>

	</body>
</html>

