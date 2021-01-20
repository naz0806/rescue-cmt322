<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Report</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Sacramento&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- bootstrap installation/css@bootstrap stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- css file -->
    <link href="css/victim-A.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/905fa9dabf.js" crossorigin="anonymous"></script>

    <!-- jquery for responsive website -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>

<body>

<section id="heading">
      <div class="container-fluid">
        <div class="row"></div>
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                    
                    <a class="navbar-brand" href="index.php"><img class="img-logo" src="css/image-F/logo.png" alt="Logo"></a>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Violence</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Domestic Violence</a> 
                                    <a class="dropdown-item" href="#">Sexual Violence</a> <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                           
                          <li class="nav-item active">
                                <a class="nav-link" href="victimMakeReport.php">Make A Report</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-md-auto">
                            <li class="nav-item active">
                                <!-- <a class="nav-link" href="#">Subscribe <span class="sr-only">(current)</span></a> -->
                                <a class="btn btn-sm btn-primary nav-link" href="#articles">Subscribe</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Login</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="usersSignIn-admin.php">Admin</a> <a class="dropdown-item" href="usersSignIn-vol.php">Volunteer</a> 
                                    <div class="dropdown-divider">
                                    </div> <a class="dropdown-item" href="usersSignUp-M">Sign Up Volunteer</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>     
    </div>

<div class="report-container">
    <section class="report-title">
        <div class="container">
            <h1>Make Your Report Today</h1>
            <p><strong>You are not alone.</strong> We are here for you. We can provide advice, 
                virtual supports and help you explore your options. <br>Tell us your problem. Be as specific as possible.
            </p>
        </div>
    </section>
</div>
    
<div>
    <section class="report-form">
        <div class="container">
            <form onsubmit="mySubmit()" method="POST" action="report.php">
                <div class="content">
    
                    <div class="input_grp">
                        <div class="input_wrap">
                            <label for="fullname">Full Name*</label><br>
                            <input type="text" id="fullname" name="vict_name" required="" placeholder="Enter Your Name">
                        </div>
                        <div class="input_wrap">
                            <label for="ic">Identification No.*</label><br>
                            <input type="text" id="ic" name="vict_ic" required="" placeholder="Enter Your I/C Number">
                        </div>    
                    </div>
    
                    <div class="input_grp">
                        <div class="input_wrap">
                            <label for="contact">Contact No.* </label><br>
                            <input type="text" id="contact" name="vict_contact" required="" placeholder="Enter Your Contact Number">
                        </div>
                        <div class="input_wrap">
                            <label for="email">Email</label><br>
                            <input type="text" id="email" name="vict_email" placeholder="Enter Your Email">
                        </div>    
                    </div>
    
                    <div class="input_grp">
                        <div class="input_wrap">
                            <label for="contact">Age*</label><br>
                            <input type="text" id="age" name="vict_age" required="" placeholder="Enter Your Age">
                        </div>
                        <div class="input_wrap">
                            <label for="state">State*<br>
                            <input list="mystate" class="input_state" id="state" required="" name="vict_state" placeholder="Choose your state" /></label>
                                <datalist id="mystate">
                                    <option value="Johor">        
                                    <option value="Kedah">
                                    <option value="Kelantan">
                                    <option value="Kuala Lumpur">        
                                    <option value="Melaka">
                                    <option value="Negeri Sembilan">       
                                    <option value="Pahang">
                                    <option value="Pulau Pinang">
                                    <option value="Perak">
                                    <option value="Perlis">    
                                    <option value="Selangor">
                                    <option value="Terengganu"> 
                                    <option value="Sabah">
                                    <option value="Sarawak">  
                                </datalist>
                        </div>
                    </div>
                    <br>
                    <label>Are you working?</label>
                    <div>
                        <label id="label" for="yes" class="radio-inline"><input type="radio" name="vict_work" value="y"
                        id="yes"> Yes</label>
                        <label id="label" for="no" class="radio-inline"><input type="radio" name="vict_work" value="n"
                        id="no"> No</label>
                    </div>   
                
                    <div class="txtb">
                        <label class="txt"><br>Report : <br>
                        <textarea id="report" name="vict_report" required="" placeholder="Write your report here.." rows="25"></textarea></label>
                    </div>
    
                    <input type="submit" name="submit" value="Send" style="padding: 10px; width: 25%" >
                </div>
            </form>
        </div>    
    </section>
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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/main.js" charset="utf-8"></script> 
    
</body>
</html>
