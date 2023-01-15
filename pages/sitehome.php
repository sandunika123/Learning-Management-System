<!doctype html>
<html lang="en">
  <head>
    <style>
      
       .alert {
            display: none;
        }
            .card{
        box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  
  cursor: pointer;}
  .card:hover{
    
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

@media(max-width: 990px){
  .card{
    margin: 20px;
  }

 
    

      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    

  </head>
  <body>
    <br><br><br>

    <?php
    session_start();
    $status= $_SESSION['status'];
    $_SESSION['st']=$status;
    $email=$_SESSION['email'];
    $_SESSION['emailad']=$email;
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
    $sub1=$_SESSION['sub1'];
    $sub2=$_SESSION['sub2'];
    $sub3=$_SESSION['sub3'];
    $photo=$_SESSION['photo'];
    $stream=$_SESSION['stream'];


      ?> 
    <nav class="navbar fixed-top navbar-expand-lg bg-light">
      <div class="container-fluid">
          <img src="../img/logo.PNG" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"> &ensp;
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
            <li class="nav-item">
              <b><font style="font-family:'calibri'; font-size: 30px;" >LMS - KnowledgeFirst</font>  </b>
            </li>
            <li class="nav-item">
              
            </li>
            <li class="nav-item">
              
            </li>
            </ul>
            <p class="nav-item dropdown no-arrow ">
                            
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['fname']." ".
                                $_SESSION['lname'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="./image/<?php echo $_SESSION['photo']; ?>" width="30px" height="30px">
                            </p>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown">
  <p class=" dropdown-toggle " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    </p>
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdownMenuButton"> 
                  <a class="dropdown-item" href="profilest.php">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                  </a>
                  <a class="dropdown-item" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up text-gray-400" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
</svg>
                      <i class="bi bi-graph-up fa-sm fa-fw mr-2 text-gray-400"></i>
                          Grade
                  </a>
                  <a class="dropdown-item" href="#">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Log out
                  </a>
  <!-- </div> -->
</div>  
         
        </div>
      </div>
    </nav>
    
      <!-- main content -->
      <section style="background-color: #eee;" >
        
<!-- side navigation -->
<div class="row p-4">
    <div class="col-3">
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar  collapse " >
    <div class="position-sticky" style= "height: 600px; overflow-y: scroll;">
        
          <a href="st dashboad.php" class="list-group-item list-group-item-action py-4 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-add-fill" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 1 1-1 0v-1h-1a.5.5 0 1 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
</svg>&nbsp;&ensp;&ensp;<span>Site home</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a> 
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>  
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
              class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
        
      </div>
    </nav>    
    </div>
        <div class="col-9" style= "height: 650px; overflow-y: scroll;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <br><br>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../img/carasel6.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
            <div class="carousel-item">
              <img src="../img/carasel5.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
            <div class="carousel-item">
              <img src="../img/carasel3.jpg" class="d-block w-100" alt="..." height="500px">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        </div>
        <br>
        <center><h1>Would you like to get a latest experience for E - Leanrning? </h1>
        <h4 style="padding-left: 50px; padding-right: 50px; padding-top: 30px;padding-bottom: 30px;" ><font style="color:dimgray ;"> Learning Management System of the Knowledge First Institute 
          provides excallant services for the Advanced Level students. No matter what stream you follow, you can download all the learning materials 
        you need through the LMS from anywhere & anytime. </h4></center>
        </font>
        <div style="background-color:rgba(229, 230, 247, 0.863);">
          <center><br><h1 >Our Courses</h1></center>
          
          <div style="padding-left:50px; padding-right: 50px;">
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Physical Science</h5>
                </div>
                <a href="login.php"><img src="../img/maths.jpg" class="card-img-top" alt="..." height="200px"></a>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Bio Science</h5>
                </div>
                <a href="login.php"><img src="../img/bio.jpg" class="card-img-top" alt="..." height="200px"></a>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Commerce</h5>  
                </div>
                <a href="login.php"><img src="../img/commerce.PNG" class="card-img-top" alt="..." height="200px"></a>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Technology</h5>
                </div>
                <a href="login.php"><img src="../img/technology.webp" class="card-img-top" alt="..." height="200px"> </a> 
              </div>
            </div>
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Arts</h5>
                </div>
                <a href="login.php"><img src="../img/art.png" class="card-img-top" alt="..." height="200px">  </a>
              </div>
            </div>
          </div>
          </div>
          <br>
        </div>
      
          <center><br><h1 >Our Team</h1>
            <h4 style="padding-left: 50px; padding-right: 50px; padding-top: 30px;padding-bottom: 30px;" ><font style="color:dimgray ;">
            The institute's prime objective is to provide high quality standard education in an exorbitant level. In order to obtain this level of
          standard, the institute has recruited a staff that is well qualified in academic and professional fields. </font><center> <br>
            <div class="row row-cols-1 row-cols-md-5 g-4">
              <div class="col">
                <div class="card">
                  <img src="../img/carasel.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                  </div>
                </div>
              </div>
            
              <div class="col">
                <div class="card">
                  <img src="../img/carasel.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="../img/carasel.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>  
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="../img/carasel.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="../img/carasel.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                  </div>
                </div>
              </div>
            </div> </h4>
            </center>
            <!-- Footer background-color: #45526e-->

            <footer style="background-color: #45526e; color: white;">
              <br>
              <div class="container">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div>
                      
                      <h3>Knowledge First Institute</h3>
                      <p class="mb-30 footer-desc">The principal educational
                         institution producing the islands top performers for the G.C.E Advanced Level Examination.</p>
                    </div>
                  </div>
                  <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                    <div class="">
                      <h4>Contact US</h4>
                      <ul class="list-unstyled">
                        <li>
                          +772233657
                        </li>
                        <li>
                          +57 265 0301 ext. 3850,3851
                        </li>
                        <li>
                          <a href="#">knowledgefirst@gmail.com</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-2 col-lg-3 col-md-6">
                    <div>
                      
                        
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6">
                    <div>
                      <h4>Address</h4>
                      <ul class="list-unstyled">
                        <li>
                          <p>New York
                            City in New York State
                            New York City comprises 5 boroughs sitting where the Hudson River meets th</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
            
                  <div class="copyright">
                    <p>Developed and maintained by Knowledge First Institute</p>
                  </div>
                </div>
              </div>
            </footer>
            <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
    
