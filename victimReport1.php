<?php 
session_start();
require_once('connection.php');?>
<?php
    if (isset($_GET['victimReport'])) {
        $report = mysqli_real_escape_string($conn, $_GET['victimReport']);  
    }

    else {
        header('location:index.php');
    }

    $query = "SELECT * FROM report WHERE REPORT_ID='$report'";
    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if (mysqli_num_rows($run_query) > 0 ){
        while ($row = mysqli_fetch_array($run_query)){

            $REPORT_ID = $row['REPORT_ID'];
            $VICT_IC = $row['VICT_IC'];
            $VICT_NAME = $row['VICT_NAME'];
            $VICT_EMAIL = $row['VICT_EMAIL'];
            $VICT_STATE = $row['VICT_STATE'];
            $VICT_REPORT = $row['VICT_REPORT'];
            

            ?>

            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <hr>
                            <p><h2><a href="#"><?php echo $REPORT_ID; ?></a></h2></p>
                            <p><h3>by <a href="#"><?php echo $VICT_NAME; ?></a></h3></p>
                            <p>Posted on <?php echo $VICT_STATE; ?></p>
                            <hr>
                            <hr>
                            <p><?php echo $VICT_REPORT; ?></p>




                       <?php }}

                        else { echo"<script>alert('error');</script>"; } ?>




                        </div>
                    </div>
                </div>
            </div>
        
    