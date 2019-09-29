<?php

include("conf-db.php");
/* function to clear input from the user */

function clear($input_data){
	return htmlentities($input_data);
}

function clear_sql($input_data){
	global $con;
	return mysqli_escape_string($con, $input_data);
}

function query($input_data){
	global $con;
	return mysqli_query($con, $input_data);
}
