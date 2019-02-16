<!--
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University
-->


<!-- HTML part of our code -->
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

		<!--
			This is the form that accepts the;
				username
				password
		-->
		<div class="container">
				<div class="col-sm-6">
					<form action="" method="post">
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

								$sqlCode = "select * from tblUsers where userID = '$IdNo'";

								$result = mysqli_query($connection, $sqlCode);
							}
						?>
						<label for="username">Username</label>
						<input type="text" name="username" class="form-control" value>

						<label for="password">Password</label>
						<input type="password" placeholder="Password" name="password" class="form-control"><br>
						<input type="submit" name="submit" class="btn btn-primary">
					</form>
				</div>
		</div>

		<?php

		?>
	</body>
</html>