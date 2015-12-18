<?php

	session_start();

	$username=$_POST['email'];
	$password=$_POST['password'];
	$db_host="127.0.0.1";
	$db_username="root";
	$db_pass="";
	$db_name="registration";



	@mysql_connect("$db_host","$db_username","$db_pass") or die ("error db connection");
	@mysql_select_db("$db_name") or die ("unknown database");


	if($password != "" &&  $username != "")
	{

		$query=mysql_query("SELECT * FROM `registration`.`register` WHERE `Password`='$password' AND `Username`='$username'" );
		$rowcount=mysql_num_rows($query);
		
		if($rowcount==0){ echo 'invalid input'; }

		else
		{
			$_SESSION['username']=$username;
			echo $_SESSION['username'];
		}

	}else{ echo("please fill in the data fields."); }

?>