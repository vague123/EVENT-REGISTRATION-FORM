<?php

	$firstname = $_POST['iFN'];
	$lastname = $_POST['iLN'];
	$company = $_POST['iC'];
	$email = $_POST['iE'];
	$phone = $_POST['iP'];
	$REligion = $_POST['Religion'];
	$answer = $_POST['ian'];

	
	echo "<center><h1>-Your Registration Form-</h1></center>";
	echo "<center><h2>-Name-</h2></center>";
	echo "<center><h3>*" . $firstname ." ". $lastname ."*</h3></center>";
	echo "<center><h2>-Company-</h2></center>";
	echo "<center><h3>*" . $company . "*</h3></center>";
	echo "<center><h2>-E-mail-</h2></center>";
	echo "<center><h3>*" . $email . "*</h3></center>";
	echo "<center><h2>-Phone-</h2></center>";
	echo "<center><h3>*".$phone."*</h3></center>";
	echo "<center><h2>-Religion-</h2></center>";
	echo "<center><h3>*".$REligion."*</h3></center>";
	echo "<center><h2>-Are you existing customer?-</h2></center>";
	echo "<center><h3>".$answer."</h3></center>";

	
?>