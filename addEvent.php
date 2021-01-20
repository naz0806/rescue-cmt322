<?php
require_once('connection.php');
session_start();
$vol = $_SESSION['Vol_Id'];?>


<?php
if (isset($_GET['addEvent'])) {
    $event = mysqli_real_escape_string($conn, $_GET['addEvent']);  
}
else {
    header('location:index.php');
}

$query = "SELECT * FROM listevent WHERE event_name='$event'";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0 ){

    while ($row = mysqli_fetch_array($run_query)){
        $event_name = $row['event_name'];
        $event_venue = $row['event_venue'];
        $start_time = $row['start_time'];
        $end_time = $row['end_time'];
        $start_date = $row['start_date'];
    }

    $sql = "INSERT INTO event (Vol_Id, event_name, event_venue, start_time, end_time, start_date) VALUES ('$vol','$event_name','$event_venue','$start_time','$end_time','$start_date')";

    $result = mysqli_query($conn, $sql);

    header("Location: volunteerListEvent-B.php");
}



?>