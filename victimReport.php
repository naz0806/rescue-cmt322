<?php 
session_start();
require_once('connection.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    <title>Admin Panel | Review</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin-A.css" rel="stylesheet">

    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/905fa9dabf.js" crossorigin="anonymous"></script>

  </head>
  <body>
  <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Rescue</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="adminDashboard-A.php">Dashboard</a></li>
            <li><a href="adminAddEvent-B.php">Event</a></li>
            <li><a href="adminManageReport-A.php">Report</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $_SESSION['Username']; ?></a></li>
            <li><a href="index.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              Review <small>Manage Victim Report</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="adminDashboard-A.php">Dashboard</a></li>  
          <li class="active">Review</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading main-color-bg">
                          Victim's Report

           
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </section>

  <section>
        <div>
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
        </div>
  </section>




  </body>
</html>  