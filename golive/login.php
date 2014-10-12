<?php

if($_POST["login_name"]){
	echo 2;
}else{
	$error = "No login name";
}

if($_POST["login_pw"]){
	echo 2;
}



if(strlen($name) <= 4){
	echo "Too short username. Please insert more than 4 characters.";
	return false;
}
if(strlen($pw) <= 4){
	echo "Too short password. Please insert more than 4 characters.";	
	return false;
}

header("Location: index.php");

?>