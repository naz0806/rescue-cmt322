<?php
session_start();
require_once('connection.php');
$Username = $Password = $Pass = '';

//if (isset($_POST['submit'])) {
        
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);
//}

$Pass = MD5($Password);

$sql = "SELECT * FROM volunteer WHERE Username='$Username' AND Password='$Pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$Vol_Id = $row["Vol_Id"];
		$Username = $row["Username"];
		$Fullname = $row["Fullname"];
		$Email = $row["Email"];
		$Contact = $row["Contact"];
		$_SESSION['Vol_Id'] = $Vol_Id;
		$_SESSION['Username'] = $Username;
		$_SESSION['Fullname'] = $Fullname;
		$_SESSION['Email'] = $Email;
		$_SESSION['Contact'] = $Contact;
	}
	header("Location: volunteerJoinevent-B.php");
}
else
{
	echo "Invalid username or password";
}
?>
