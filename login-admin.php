<?php
session_start();
require_once('connection.php');
$Username = $Password = $Pass = '';

//if (isset($_POST['submit'])) {
        
        $Username = mysqli_real_escape_string($conn, $_POST['Username']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);
//}

$Pass = MD5($Password);

$sql = "SELECT * FROM users WHERE Username='$Username' AND Password='$Pass'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$User_Id = $row["User_Id"];
		$Username = $row["Username"];
		$Fullname = $row["Fullname"];
		$Email = $row["Email"];
		$Contact = $row["Contact"];
		$_SESSION['User_Id'] = $User_Id;
		$_SESSION['Username'] = $Username;
		$_SESSION['Fullname'] = $Fullname;
		$_SESSION['Email'] = $Email;
		$_SESSION['Contact'] = $Contact;
	}
	header("Location: https://rescue-cmt322-new.herokuapp.com/adminDashboard-A.php");
}
else
{
	echo "Invalid username or password";
}
?>
