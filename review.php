<?php

require_once('connection.php');

$rev_name = $rev_reply ='';

$rev_name = $_POST['rev_name'];
$rev_reply = $_POST['rev_reply'];

$sql = "INSERT INTO review (rev_name, rev_reply) VALUES ('$rev_name','$rev_reply' )";
$result = mysqli_query($conn, $sql);
if($result)
{
	//header("Location: https://rescue-cmt322.herokuapp.com/adminReviewReport-A.php");
	header("Location: adminReviewReport-A.php");
}
else
{
	echo "Error :".$sql;
}


?>
