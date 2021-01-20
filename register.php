<?php

require_once('connection.php');

$Fullname = $Email = $Username = $Password = $Contact = '';

if (isset($_POST['submit'])) {
        $Fullname = mysqli_real_escape_string($conn, $_POST['Fullname']);
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);
        $Contact = mysqli_real_escape_string($conn, $_POST['Contact']);
}
	
        $Pass = md5($Password); //encrypt password before storing in database (security)
        $sql = "INSERT INTO volunteer (Fullname, Email, Username, Password, Contact) VALUES ('$Fullname','$Email','$Username','$Pass','$Contact')";
        $result = mysqli_query($conn, $sql);

	//$result = mysqli_query($conn, $sql);
	if($result)
	{
		header("Location: usersSignIn-vol.php");
	}
	else
	{
		echo "Error :".$sql;
	}


?>
       <!-- $password = md5($d_pass1); //encrypt password before storing in database (security)
        $sql = "INSERT INTO donor (d_fname, d_lname, d_email, d_pass1, d_pass2)
                VALUES ('$d_fname', '$d_lname', '$d_email', '$d_pass1', '$d_pass2')";
        mysqli_query($mysqli, $sql); -->
    
