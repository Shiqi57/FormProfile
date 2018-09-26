<?php

var_dump($_POST);

echo($_POST["fname"]);
echo($_POST["lname"]);

if(!isset($_POST["acceptTerms"])){
	echo("acceptTerms not received");
}else{
	if($_POST["acceptTerms"] == "on"){
		echo("they accepted");
	}
}
?>