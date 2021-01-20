<?php

require_once('connection.php');

$vict_name = $vict_ic = $vict_contact = $vict_email = $vict_age = $vict_state = $vict_work = $vict_report ='';

if (isset($_POST['submit'])) {
	$vict_name = mysqli_real_escape_string($conn,$_POST['vict_name']);
	$vict_ic = mysqli_real_escape_string($conn,$_POST['vict_ic']);
	$vict_contact = mysqli_real_escape_string($conn,$_POST['vict_contact']);
	$vict_email = mysqli_real_escape_string($conn,$_POST['vict_email']);
	$vict_age = mysqli_real_escape_string($conn,$_POST['vict_age']);
	$vict_state = mysqli_real_escape_string($conn,$_POST['vict_state']);
	$vict_work =  mysqli_real_escape_string($conn,$_POST['vict_work']);
	$vict_report = mysqli_real_escape_string($conn,$_POST['vict_report']);
}
	
$sql = "INSERT INTO report (vict_name, vict_ic, vict_contact, vict_email, vict_age, vict_state, vict_work, vict_report) VALUES 
     ('$vict_name','$vict_ic','$vict_contact','$vict_email','$vict_age','$vict_state','$vict_work','$vict_report' )";
$result = mysqli_query($conn, $sql);
if($result)
{
	// header("Location: https://rescue-cmt322.herokuapp.com/victimMakeReport-A.php");
	header("Location: https://rescue-cmt322.herokuapp.com/victimMakeReport-A.php");
}
else
{
	echo "Error :".$sql;
}


?>
