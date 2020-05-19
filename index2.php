<?php
$con=mysqli_connect("localhost","root","","mydb");
if(isset($_POST['reg']))
{
$uname=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$addres=$_POST['address'];
$pass=$_POST['password'];
$usertype=$_POST['usertype'];
$sql="insert into users(name,email,phone,address,password,usertype) values('$uname','$email','$phone','$addres','$pass','$usertype')";
mysqli_query($con,$sql);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student Mentorship</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
    html,body{
    overflow-x: hidden;
    }
    html,
    body,
    header,
    .view {
    height: 100%;
    }
    .mdb-select{
    border-bottom: 3px solid #0026ff;
    }
    @media (max-width: 740px) {
    html,
    body,
    header,
    .view {
    height: 1000px;
    }
    }
    @media (min-width: 800px) and (max-width: 850px) {
    html,
    body,
    header,
    .view {
    height: 650px;
    }
    }
    @media (min-width: 800px) and (max-width: 850px) {
    .navbar:not(.top-nav-collapse) {
    background: #1C2331!important;
    }
    }
    #overlay{
    top: 0px;
    bottom: 0px;
    right: 0px;
    left: 0px;
    background: rgba(0,0,0,0.6);
    }
    img{
    background: cover;
    }
    </style>
    <script>
    $(document).ready(function ()
    {
    $("#Mentor").hide();
    // $("#Student").hide();
    // $("#Admin").hide();
    
    $("#Touch").change(function()
    {
    var Type = $(this).children("option:selected").val();
    
    if (Type == 'Mentor')
    {
    $("#Mentor").show();
    $("#lblMentor").show(1000);
    $("#lblAdmin").hide();
    $("#lblStudent").hide();
    }
    else if (Type == 'Student')
    {
    $("#Mentor").show();
    $("#lblStudent").show(1000);
    $("#lblMentor").hide();
    $("#lblAdmin").hide();
    }
    else if (Type == 'Admin')
    {
    $("#Mentor").show();
    $("#lblAdmin").show(1000);
    $("#lblStudent").hide();
    $("#lblMentor").hide();
    }
    else {
    alert("mis-match type")
    }
    });
    });
    </script>
    <script>
    $(document).ready(function () {
    $('.mdb-select').materialSelect();
    });
    </script>
  </head>
  <body>
    
    <!-- user type login form-modal-->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <!-- Change class .modal-sm to change the size of the modal -->
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header badge blue-gradient color-block">
            <h4 class="modal-title w-100" id="myModalLabel"> Welcome Login</h4>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-danger">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Material input --><div class="md-form input-group input-group-lg mb-3">
            <select name="userType" id="Touch" class="mdb-select md-form dropdown-primary border-primary border-top-0 border-left-0 border-right-0 form-control" required>
              <option value="Select User Type" disabled selected>--Select User Type--</option>
              <option value="Mentor">Mentor</option>
              <option value="Student">Student</option>
              <option value="Admin">Admin</option>
            </select>
          </div>
          <form action="logindev.php" method="post">
            
            <div class="card shadow-lg" id="Mentor">
              <div class="card-header  border-0 aqua-gradient">
                <div class="card-title">
                  <h3 class="pl-3 text-white" id="lblMentor">Mentor Login</h3>
                  <h3 class="pl-3 text-white" id="lblStudent">Student</h3>
                  <h3 class="pl-3 text-white" id="lblAdmin">Admin User</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="md-form input-group input-group-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text md-addon indigo-text" id="inputGroupMaterial-sizing-sm">
                      <i class="fas fa-user info-text"></i>
                    </span>
                  </div>
                  
                  <input type="text" name="n1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-sm" placeholder="UserName..." required>
                </div>
                
                <div class="md-form input-group input-group-lg mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">
                      <i class="fas fa-lock indigo-text"></i>
                    </span>
                  </div>
                  <input type="password" name="pas" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-sm" placeholder="Password..." required>
                </div>
                <div class="md-form">
                  <input type="submit" value="login" class="btn aqua-gradient btn-md btn-block font-weight-bold" name="register">
                </div>
              </div>
            </div>
          </form>
          <!-- Material input -->
        </div>
        <div class="modal-footer">
          <h6>
          <strong>If You Are  New User Please Click Here -></strong> <button class="btn btn-primary font-weight-bold btn-md" data-toggle="modal" data-target="#centralModalSm1">Register</button>
          </h6>
        </div>
      </div>
    </div>
  </div>
  <!------user type login form end-modal end---->
  <!----register form modal  ----->
  <div class="modal fade" id="centralModalSm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header badge blue-gradient color-block">
          <h4 class="modal-title w-100" id="myModalLabel"> Welcome Register</h4>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Material input -->
          <form method="post">
            <div class="card shadow-lg">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="md-form input-group input-group-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text md-addon indigo-text" id="inputGroupMaterial-sizing-sm">
                          <i class="fas fa-user info-text"></i>
                        </span>
                      </div>
                      <input type="text" name="username" class="form-control"  placeholder="Full Name..." required>
                    </div>
                    <div class="md-form input-group input-group-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text md-addon indigo-text" id="inputGroupMaterial-sizing-sm">
                          <i class="fas fa-envelope info-text"></i>
                        </span>
                      </div>
                      <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroupMaterial-sizing-sm" placeholder="Email..." required>
                    </div>
                    <div class="md-form input-group input-group-lg">
                      <div class="input-group-prepend">
                        <span class="input-group-text md-addon indigo-text" id="inputGroupMaterial-sizing-sm">
                          <i class="fas fa-phone info-text"></i>
                        </span>
                      </div>
                      <input type="text" name="phone" class="form-control" placeholder="Phone..." required>
                    </div>
                    <div class="md-form input-group input-group-lg mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">
                          <i class="fas fa-book indigo-text"></i>
                        </span>
                      </div>
                      <input type="text" name="address" class="form-control"  placeholder="Current Adress..." required>
                    </div>
                  </div>
                  <div class="md-form input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text md-addon indigo-text" id="inputGroupMaterial-sizing-sm">
                        <i class="fas fa-lock info-text"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control"  placeholder="Password..." required>
                  </div>
                  <div class="md-form input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text md-addon" id="inputGroupMaterial-sizing-sm">
                        <i class="fas fa-lock indigo-text"></i>
                      </span>
                    </div>
                    <input type="password" name="repass" class="form-control" placeholder="Re -Password..." required>
                  </div>
                  <div>
                    <input type="radio" name="usertype" value="Mentor">
                    <label for="men">Mentor</label>
                     <input type="radio" name="usertype" value="Student">
                    <label for="men">Student</label>
                     <input type="radio" name="usertype" value="Admin">
                    <label for="men">Admin</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="md-form">
                <input type="submit" align="center" class="btn aqua-gradient btn-lg btn-block font-weight-bold" value="register" name="reg">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <h6>
        <strong class="text-success">If You Are Exits User Please Click Here -></strong> <button class="btn btn-primary font-weight-bold btn-md" data-toggle="modal" data-target="#centralModalSm">Login</button>
        </h6>
      </div>
    </div>
  </div>
</div>
<!-----register form end modal -------->
<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-primary font-weight-bold scrolling-navbar">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="index2.html" target="_blank">
      <img src="img/large1.png" class="img img-rounded" width="100px" height="40px" alt="Alternate Text" /> <strong></strong>
    </a>
    <!-- Collapse -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-danger" href="index2.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="about.html" target="_blank">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="#" target="_blank">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="contact.php" target="_blank">Contact Us</a>
        </li>
      </ul>
      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="https://www.facebook.com" class="nav-link" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://twitter.com" class="nav-link" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <button class="btn btn-indigo btn-sm  font-weight-bold" data-toggle="modal" data-target="#centralModalSm">Login</button>
        </a>
      </li>
    </ul>
  </div>
</div>
</nav>
<!-- Navbar -->
<!-- Full Page Intro -->
<!--Grid row-->
<div class="row wow fadeIn">
<!--Grid column-->
<div class="col-lg-12  white-text text-center text-md-left">
  
  <!--Carousel Wrapper-->
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-2" data-slide-to="2"></li>
      <li data-target="#carousel-example-2" data-slide-to="3"></li>
      <li data-target="#carousel-example-2" data-slide-to="4"></li>
      <li data-target="#carousel-example-2" data-slide-to="5"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" height="525" width="100%" src="img/a.jpg"
          alt="First slide">
          <div class="mask rgba-black-light">
            <h1 class="display-1 font-weight-bold text-warning text-center" style="margin-top: 200px;">MentorShip</h1>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive ">MentorShip </h3>
          <p>MentorShip </p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" height="525" width="100%" src="img/b.jpg"
          alt="Second slide">
          <div class="mask rgba-black-strong">
            <h1 class="display-1 font-weight-bold text-warning text-center" style="margin-top: 200px;">MentorShip</h1>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">
          MentorShip And FriendShip</h3>
          <p>MentorShip And FriendShip</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" height="525" width="100%" src="img/c.jpg"
          alt="Third slide">
          <div class="mask rgba-black-slight">
            <h1 class="display-1 text-warning  font-weight-bold text-center" style="margin-top: 200px;">MentorShip</h1>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Mentor And Mentee</h3>
          <p>Mentor And Mentee</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" height="525" width="100%" src="img/d.jpg"
          alt="Third slide">
          <div class="mask rgba-black-slight">
            <h1 class="display-1 text-warning font-weight-bold text-center" style="margin-top: 200px;">MentorShip</h1>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Mentor And Mentee</h3>
          <p>Mentor And Mentee</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" height="525" width="100%" src="img/e.jpg"
          alt="Third slide">
          <div class="mask rgba-black-slight">
            <h1 class="display-1 text-warning font-weight-bold text-center" style="margin-top: 200px;">MentorShip</h1>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Mentor And Mentee</h3>
          <p>Mentor And Mentee</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" height="525" src="img/f.jpg"
          alt="Third slide" width="100%">
          <div class="mask rgba-black-slight">
            <h1 class="display-1 text-warning  font-weight-bold text-center" style="margin-top: 200px;">MentorShip</h1>
          </div>
        </div>
        <div class="carousel-caption">
          <h3 class="h3-responsive">Mentor And Mentee</h3>
          <p>Mentor And Mentee</p>
        </div>
      </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
</div>
</div>
<!--Grid row-->
<!-- Full Page Intro -->
<!--Main layout-->
<div class="row bg-light justify-content-center bg-white">
<div class="col-md-8 text-center">
  <h1 class="mt-5">
  <span class="font-weight-bold text-dark">Get Guided In</span>
  <span>Life</span>
  <span class="font-weight-bold text-dark"> By A Mentor</span>
  </h1>
  <h2 class="mt-4">
  Mentspot is a platform where mentors and mentees can find each other and connect.
  </h2>
  <h4 class="mt-3">
  To get somewhere in life, business, study, relationships or anything else, it's important to get guidance from a mentor. But finding the right mentor is difficult. Mentspot provides a simple way to get connected with mentors and mentees in <span class="line-break">any category.</span>
  </h4>
  <h3 class="mt-4 font-weight-bold">
  The fastest way to get started is by creating a profile right now:
  </h3>
  <h2>
  <button class="btn btn-primary btn-lg shadow font-weight-bold">Create Profile <i class="far fa-hand-point-right font-weight-bold" style="font-size: 30px;"></i> </button>
  </h2>
</div>
</div>
<!--Main layout-->
<!--Footer-->
<footer class="page-footer text-center bg-dark font-small mt-4 wow fadeIn">
<!--Call to action-->
<div class="pt-4">
  <a class="btn btn-outline-white" href="mentorshiptutorial.php" target="_blank" role="button">MentorShip Document
    <i class="fas fa-download ml-2"></i>
  </a>
  <a class="btn btn-outline-white" href="mentorshiptutorial.php" target="_blank" role="button">MentorShip Learning Tutorial
    <i class="fas fa-graduation-cap ml-2"></i>
  </a>
</div>
<!--/.Call to action-->
<hr class="my-4">
<!-- Social icons -->
<div class="pb-4">
  <a href="https://www.facebook.com" target="_blank">
    <i class="fab fa-facebook-f mr-3"></i>
  </a>
  <a href="https://twitter.com" target="_blank">
    <i class="fab fa-twitter mr-3"></i>
  </a>
  <a href="https://www.youtube.com" target="_blank">
    <i class="fab fa-youtube mr-3"></i>
  </a>
  <a href="https://plus.google.com" target="_blank">
    <i class="fab fa-google-plus-g mr-3"></i>
  </a>
  <a href="https://dribbble.com" target="_blank">
    <i class="fab fa-dribbble mr-3"></i>
  </a>
  <a href="https://pinterest.com" target="_blank">
    <i class="fab fa-pinterest mr-3"></i>
  </a>
  <a href="https://github.com" target="_blank">
    <i class="fab fa-github mr-3"></i>
  </a>
  <a href="http://codepen.io" target="_blank">
    <i class="fab fa-codepen mr-3"></i>
  </a>
</div>
<!-- Social icons -->
<!--Copyright-->
<div class="footer-copyright py-3">
  © 2019 Copyright:
  <a href="mentorship.php" target="_blank"> MentorShip.com  </a>
</div>
<!--/.Copyright-->
</footer>
<!--/.Footer-->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/Action/mdb.min.js"></script>
<script type="text/javascript" src="js/mdb.js"></script>
<!-- Initializations -->
<script type="text/javascript">
// Animations initialization
new WOW().init();
</script>
</body>
</html>