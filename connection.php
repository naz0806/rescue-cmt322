<!--
in this file we write code for connection with database.
$conn = mysqli_connect("localhost","root","","data" ) or die ("error" . mysqli_error($conn)); 


$conn = mysqli_connect("remotemysql.com","3Xfb0olTjF","kWUZVKJpXB","3Xfb0olTjF");

if(!$conn)
{
	echo "Database connection failed...";
}
-->

<?php
 //connect to the database
    $conn = mysqli_connect('remotemysql.com', '3Xfb0olTjF', 'kWUZVKJpXB', '3Xfb0olTjF') or die($conn);

    if($mysqli->connect_error){
        die('Connection Failed : '.$mysqli->connect_error);
    }

?>
