<?php
/*
 * @group 14 cmt322
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rescue</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Sacramento&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- bootstrap installation/css@bootstrap stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- css file -->
    <link rel="stylesheet" href="css/main-F.css">
    

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
                            <li class="nav-item active">
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
                         
                          <li class="nav-item">
                                <a class="nav-link" href="victimMakeReport-A.php">Make A Report</a>
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
                                    </div> <a class="dropdown-item" href="usersSignUp-M.php">Sign Up Volunteer</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>     
    </div>


<div class="video-header">
      <div class="overlay"></div>
      <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="css/image-F/vid3.mp4" type="video/mp4">
      </video>
      <div class="container h-100 video-header-write ">
        <div class="d-flex h-100 text-center align-items-center">
          <div class="w-100 text-white">
            <h1 class="head-vid-header display-4">Save Your Loved Ones</h1>
            <p class="lead mb-0">Voice Out, You Deserve To Be Heard</p>
            <a href="victimMakeReport-A.php"><button type="button" class="btn btn-outline-danger btn-vid-header">Report Here</button></a>
          </div>
        </div>
      </div>
    </div>
    
</section>

<section id="about">

    <div class="container about-section">
      <h1 class="display-5 about-header">About Us</h1>
      <p class="about-header-exp">9% of Malaysian women who have ever been in a relationship experience domestic violence. That’s over 800,000 women across Malaysia. We see such violence as symptomic of a deeper problem: gender inequality. Violence happens when women’s equal rights, worth, and dignity are not recognised. In 1982, we set up Malaysia’s first domestic violence shelter, and today, we’re the largest service provider for domestic violence survivors in Malaysia. </p>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 feature feature1">
          <div class="card card-1">
            <h3 class="feature-title">We Serve</h3>
              <p class="feature-elaboration"></p>Since 1982, we have provided free crisis support and shelter to women 
                and children who face abuse. Today, we are the largest service provider for domestic violence 
                survivors in Malaysia.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature feature2">
          <div class="card card-2">
            <h3 class="feature-title">We Serve</h3>
            <p class="feature-elaboration"></p>Since 1982, we have provided free crisis support and shelter to women 
              and children who face abuse. Today, we are the largest service provider for domestic violence 
              survivors in Malaysia.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 feature feature3">
          <div class="card card-3">
            <h3 class="feature-title">We Serve</h3>
            <p class="feature-elaboration"></p>Since 1982, we have provided free crisis support and shelter to women 
              and children who face abuse. Today, we are the largest service provider for domestic violence 
              survivors in Malaysia.</p>
          </div>
        </div>
      </div>
    </div>
</section>


<section id="volunteer">
  <div class="container-fluid">
    <div class="row event-info">
      <div class="col-sm-4 v-jumbo">
        <h1 class="display-4 vol-exp">BE A VOLUNTEER. GET INVOLVED <br> WITH RESCUE</h1>
        <a href="usersSignUp-M.php"><button type="button" class="btn btn-danger btn-vjumbo">   Join Here   </button></a>
      </div>
      <div class="col-sm-8 jumbotron v-event">
         </div>
    </div>
  </div>
  
</section> 


<section id="info">
  <div class="container info-section">
    <h1 class="display-5 info-header">Latest News</h1>
    <p class="about-header-exp">9% of Malaysian women who have ever been in a relationship experience domestic violence. That’s over 800,000 women across Malaysia. We see such violence as symptomic of a deeper problem: gender inequality. Violence happens when women’s equal rights, worth, and dignity are not recognised. In 1982, we set up Malaysia’s first domestic violence shelter, and today, we’re the largest service provider for domestic violence survivors in Malaysia. </p>
  </div>
  <div class="row">
               <div class="info-column col-lg-4 col-md-6">
                  <div class="card">
                    <a href="https://penangfoodie.com/raja-burger-malaysia-lebuh-union-georgetown/" style="text-decoration:none">
                        <div class="card-header">
                          <img class="c-child-info" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc7BK51HxXLWkeiIUf-ah6gK5iI6RPUzityw&usqp=CAU" alt="Go out for a meal" loading="lazy">
                          <h4 class="info-text">Save Yourself: Stop Abuse</h4>
                          <button type="button" class="btn btn-danger">Read more</button>
                        </div>
                    </a>
                  </div>
              </div>

              <div class="info-column col-lg-4 col-md-6">
                <div class="card">
                  <a href="https://penangfoodie.com/raja-burger-malaysia-lebuh-union-georgetown/" style="text-decoration:none">
                      <div class="card-header">
                        <img class="c-child-info" src="https://kathiwaligora.com/wp-content/uploads/2015/09/court.jpg" alt="Go out for a meal" loading="lazy">
                        <h4 class="info-text">Report the Prey</h4>
                        <button type="button" class="btn btn-danger">Read more</button>
                      </div>
                  </a>
                </div>
            </div>

              <div class="info-column col-lg-4">
                  <div class="card">
                    <a href="https://penangfoodie.com/raja-burger-malaysia-lebuh-union-georgetown/" style="text-decoration:none">
                        <div class="card-header">
                          <img class="c-child-info" src="https://ihpl.llu.edu/sites/ihpl.llu.edu/files/field/image/girl-holding-help-sign.jpg" alt="Go out for a meal" loading="lazy">
                          <h4 class="info-text">What is Sexual Abuse</h4>
                          <button type="button" class="btn btn-danger">Read more</button>
                        </div>
                    </a>
                  </div>
              </div>

  </div>
</section>

<section id="event">
  <div class="container-fluid">
    <div class="row event-info">
      <div class="col-sm-8 jumbotron j-event">
        <h1 class="display-3 up-event">Upcoming Events</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.  jumbotron that occupies the entire horizontal space</p>   
      </div>
      <div class="col-sm-4 jumbo">
        <div class="d-flex bd-highlight events">
          <div class="p-1 w-75 bd-highlight"><i class="far fa-calendar"></i>Against Domestic Violence</div>
          <button type="button" class="d-flex justify-content-betwee btn btn-danger">Info</button>
        </div>
        <div class="d-flex bd-highlight events">
          <div class="p-1 w-75 bd-highlight"><i class="far fa-calendar"></i>Against Domestic Violence</div>
          <button type="button" class="d-flex justify-content-betwee btn btn-danger">Info</button>
        </div>
        <div class="d-flex bd-highlight events">
          <div class="p-2 w-75 bd-highlight"><i class="far fa-calendar"></i>Against Domestic Violence</div>
          <button type="button" class="d-flex justify-content-betwee btn btn-danger">Info</button>
        </div>
      </div>
    </div>
  </div>
  
</section> 


<section id="articles">
      <div class="container-fluid articles-section">
        <h1 class="display-5 article-header">Get In Touch</h1>
        <p class="article-elaboration">9% of Malaysian women who have ever been in a relationship experience domestic violence.
That’s over 800,000 women across Malaysia. We see such violence as symptomic of a deeper problem: gender inequality.
Violence happens when women’s equal rights, worth, and dignity are not recognised. In 1982, we set up Malaysia’s first domestic violence shelter, and today, we’re the largest service provider for domestic violence survivors in Malaysia.</p>
      </div>
      <form class="form-signin" action="/" method="post">
        <input type="email"class="form-control .bottom" name="emailAdd"placeholder="Email Address" required>
        <button class="btn btn-lg btn-dark btn-block buttonSubmit" type="submit">Sign Me Up</button>
      </form>
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



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="main.js" charset="utf-8"></script> 
    
</body>
</html>

