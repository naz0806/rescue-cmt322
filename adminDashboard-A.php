<?php
/*
 * @group 14 cmt322
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    <title>Admin Panel | Dashboard</title>

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
            <li class="active"><a href="index.php">Dashboard</a></li>
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
              Dashboard <small>Manage Your Site</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>
<!-------------------------------------------------------------Profile----------------------------------------------------->
    <section id="main">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="panel panel-default">
                      <div class="panel-heading main-color-bg">
                          Admin's Profile
                      </div>
                      <div class="panel-body">
                          <div class="container">
                              <div class="row">
                                  <div class="col-md-3" >
                                      <img src="css/image-B/user1.jpg" id="profile-pic">
                                  </div>
                                  <div class="col-md-8">
                                      <div id="profile">
                                          <table class="table table-striped">
                                              <tr>
                                                  <th>Name</th>
                                                  <th>:</th>
                                                  <td><?php echo $_SESSION['Fullname']; ?></td>
                                              </tr>
                                              <tr>
                                                  <th>Admin ID</th>
                                                  <th>:</th>
                                                  <td><?php echo $_SESSION['User_Id']; ?></td>
                                              </tr>
                                              <tr>
                                                  <th>Contact No.</th>
                                                  <th>:</th>
                                                  <td><?php echo $_SESSION['Contact']; ?></td>
                                              </tr>
                                              <tr>
                                                  <th>Email</th>
                                                  <th>:</th>
                                                  <td><?php echo $_SESSION['Email']; ?></td>
                                              </tr>
                                              <tr style="overflow: hidden;">
                                                  <th>Address</th>
                                                  <th>:</th>
                                                  <td> 96, Lorong Hang Tuah 8/37, SS6, 86522 Gelang Patah, Johor</td>
                                              </tr>
                                              <tr>
                                                  <th>Status &nbsp &nbsp</th>
                                                  <th>:&nbsp &nbsp</th>
                                                  <td>Staff</td>
                                              </tr>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div> 
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="adminDashboard-A.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="adminAddEvent-B.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Add Event<span class="badge">12</span></a>
              <a href="adminManageReport-A.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Report<span class="badge">12</span></a>
            </div>

            <div class="well">
              <h4>Answered</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  50%
                </div>
              </div>
              <h4>Pending</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  50%
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 99</h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                    <h4>Report</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 6</h2>
                    <h4>Review</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2,251</h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
            </div>

            <!-- Latest Users -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Latest Users</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                  </tr>
                  <tr>
                    <td>Siti Rohaya</td>
                    <td>sitirohaya@gmail.com</td>
                    <td>Dec 12,2020</td>
                  </tr>
                  <tr>
                    <td>Noor Raisah</td>
                    <td>noorraisah88@yahoo.com</td>
                    <td>Dec 12,2020</td>
                  </tr>
                  <tr>
                    <td>Amanda Amani</td>
                    <td>amandani@gmail.com</td>
                    <td>Dec 12,2020</td>
                  </tr>
                  <tr>
                    <td>Che Jamilah</td>
                    <td>che_jammie@yahoo.com</td>
                    <td>Dec 12,2020</td>
                  </tr>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <footer class="white-section" id="footer">
      <div class="container-fluid">
        <i class="social-icon fab fa-facebook-f"></i>
        <i class="social-icon fab fa-twitter"></i>
        <i class="social-icon fab fa-instagram"></i>
        <i class="social-icon fas fa-envelope"></i>
        <p>© Copyright 2020 Rescue</p>
      </div>
    </footer> 

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
