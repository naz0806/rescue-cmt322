<?php
session_start();
require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    <title>Admin Panel | Report</title>

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
            <li class="active"><a href="adminManageReport-A.php">Report</a></li>
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
              Report <small>Manage Victim Report</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="adminDashboard-A.php">Dashboard</a></li>  
          <li class="active">Report</li>
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
              <a href="adminAddEvent-B.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>Add Event<span class="badge">12</span></a>
              <a href="adminManageReport-A.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Report<span class="badge">12</span></a>
            </div>

            <div class="well">
              <h4>Answered</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  50%
                </div>
              </div>
              <h4>Pending</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                  50%
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Report</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" type="text" placeholder="Find Report...">
                    </div>
                </div>  
                
                <form action="" method="post">
                    <table class="table table-bordered table-striped table-hover">
                    <thead>
                            <tr>
                                <th>Report ID</th>
                                <th>IC Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Report Details</th>
                                <th>State</th>
                                <th>Reply</th>
                            </tr>
                      </thead>

                      <tbody>
                            <?php 
                                $query = "SELECT REPORT_ID, VICT_IC,VICT_NAME,VICT_EMAIL,VICT_STATE  FROM report";
                                $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                if (mysqli_num_rows($run_query) > 0) {
                                  while ($row = mysqli_fetch_array($run_query)) {
                                      $REPORT_ID = $row['REPORT_ID'];
                                      $VICT_IC = $row['VICT_IC'];
                                      $VICT_NAME = $row['VICT_NAME'];
                                      $VICT_EMAIL = $row['VICT_EMAIL'];
                                      $VICT_STATE = $row['VICT_STATE'];
                                  
                                      echo "<tr>";
                                      echo "<td>$REPORT_ID</td>";
                                      echo "<td>$VICT_IC</td>";
                                      echo "<td>$VICT_NAME</td>";
                                      echo "<td>$VICT_EMAIL</td>";
                                      echo "<td>$VICT_STATE</td>";
                                      //echo "<td><a href='victimReport.php?victimReport=$REPORT_ID' style='color:red'>View Report</a></td>";
                                      echo "<td><button><a href='victimReport.php?victimReport=$REPORT_ID' style='color:red'>View Report</a></button></td>";
                                      echo "<td><button><a href='#replyReport' data-toggle='modal' data-target='#replyReport' style='color:red'>Reply Report</button></td>";

                                     // echo "<td><button data-toggle='modal' data-target='#replyReport'><a href='victimReport.php?victimReport=$REPORT_ID' style='color:red'>Reply Report</a></button></td>";
                                      //echo "<td><form method='post'><input type='submit' name='submit' value='View Report'/></td>";
                                      echo "</tr>";

                                      // echo "<td><img  width='100' src='../allpostpics/$post_image' alt='Post Image' ></td>";
                                     // echo "<td>$post_date</td>";
                                      //echo "<td><a href='post.php?post=$post_id' style='color:green'>See Post</a></td>";
                                      //echo "<td><a href='editposts.php?id=$post_id'><span class='glyphicon glyphicon-edit' style='color: #265a88;'></span></a></td>";
                                      //echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='?del=$post_id'><i class='fa fa-times' style='color: red;'></i>delete</a></td>";
                                      //echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to publish this post?')\"href='?pub=$post_id'><i class='fa fa-times' style='color: red;'></i>publish</a></td>";
                                      
                                  
                                  }
                                  }

                                  else {
                                    echo "<script>alert('Not reports yet!);
                                    window.location.href= 'index.php';</script>";
                                }                         
                            
                            ?>
                     </tbody>
                     </table>
                
                </form>

                  <nav aria-label="...">
                    <ul class="pagination">
                      <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                      <li class="active"><a href="#" class="main-color-bg">1 <span class="sr-only">(current)</span></a></li>
                      ...
                    </ul>
                  </nav>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    

    <!-- Reply report-->
    <div class="modal fade" id="replyReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form onsubmit="mySubmit3()" method="POST" action="review.php">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Review Report</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="rev_name" class="form-control" value="<?php echo "$VICT_EMAIL"; ?>">
                    </div>
                    <div class="form-group">
                        <label>Reply</label>
                        <textarea name="rev_reply" class="form-control" placeholder="Write your reply here"></textarea>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary main-color-bg">Send Reply</button>
                </div>
            </form>
          </div>
        </div>
    </div>


    <footer class="white-section" id="footer">
      <div class="container-fluid">
        <i class="social-icon fab fa-facebook-f"></i>
        <i class="social-icon fab fa-twitter"></i>
        <i class="social-icon fab fa-instagram"></i>
        <i class="social-icon fas fa-envelope"></i>
        <p>© Copyright 2020 Rescue</p>
      </div>
    </footer> 

    <script>
        CKEDITOR.replace('rev_reply');
    </script>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
