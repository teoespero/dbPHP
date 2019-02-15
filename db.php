<!--
	Teodulfo Espero
	BS Cloud and Systems Administration
	Western Governors University
-->


<!-- This our php code that handles the validation -->
<?php

	$connection = mysqli_connect('localhost', 'root', '','dbDatabase01');
	if(!$connection){
		die("Database connection failed.");
	}

	$sqlCode = "select * from tblUsers";

	$result = mysqli_query($connection, $sqlCode);

	if(!$result){
		die('Query failed.' . mysqli_error());
	}
?>