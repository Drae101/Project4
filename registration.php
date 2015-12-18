<?php

	$db_host="127.0.0.1";
	$db_username="root";
	$db_pass="";
	$db_name="registration";
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pword=$_POST['pword'];
	$confirm =$_POST['rpword'];

	@mysql_connect("$db_host","$db_username","$db_pass") or die ("unable to connect to database");
	@mysql_select_db("$db_name") or die ("invalid database");
	

	
	if($fname==""||$lname==""||$email==""||$pword=="" || $confirm=="") { echo 'please fill in all fields'; }

	else if ($pword != $confirm) { echo "passwords dont match"; }

	else if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}$/", $pword)) { echo 'incorret password format'; }

	else
	{
		$statement = "INSERT INTO `registration`.`register` (`ID`, `First Name`, `Last Name`, `Password`, `Username`) VALUES (NULL, '$fname','$lname','$pword','$email');";
		mysql_query($statement);
		echo 'added';
	}

	

?>