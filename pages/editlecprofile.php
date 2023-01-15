<!-- <?php
session_start();

error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
    $dbs = lms;

	$db = mysqli_connect("localhost", "root", "",$dbs);
    $email=$_SESSION['email'];

	// Get all the submitted data from the form
	$sql = "UPDATE student SET photo = $filename WHERE email = $email";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
}
?> -->
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
                                    src="./image/<?php echo $_SESSION['photo']; ?>" width="30" height="30">
                            </p>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown">
  <p class=" dropdown-toggle " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    </p>
  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="dropdownMenuButton"> 
                  <a class="dropdown-item" href="profilelec.php">
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
                  <a class="dropdown-item" href="welcome.html">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Log out
                  </a>
  <!-- </div> -->
</div>  

         
        </div>
      </div>
    </nav>
      <section style="background-color: #eee;">
        <br><br>
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="">Home</a></li>
                  <li class="breadcrumb-item"><a href="st dashboad.php">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="profilest.php">User Profile</li></a>
                  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
              </nav>
            </div>
          </div>
      
          <div class="row">
            <div class="col-lg-15">
              <div class="card mb-4" style="pointer-events: none;">
                <div class="card-body">
                <div class="row">
                <div class="col-sm-3">
                <img class="img-profile rounded-circle" width="100" height="100"
                                    src="./image/<?php echo $_SESSION['photo']; ?>">
                  </div>
                  <div class="col-sm-5">
                  <h1 class="my-3"><?php echo $_SESSION['fname'];?>&nbsp;<?php echo $_SESSION['lname'];?></h1>
                  
                </div>
                  
                </div>
              </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
            <div class="col-lg-15">
            <div class="card mb-4" >
              
                <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">General</h3>
                    </div>
                    <div class="col-sm-9">
                    <span style="font-size: 12px;"><svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg> Please update every field. If you do not want to change any field, please enter same name.</span>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">First Name</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="fname" id="form3Example1m" class="form-control form-control" value= "<?php $_SESSION['fname']; ?>" placeholder=<?php echo $_SESSION['fname'];?> required/>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Last Name</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="lname" id="form3Example1m" class="form-control form-control" value="<?php $_SESSION['lname']; ?>" placeholder=<?php echo $_SESSION['lname'];?> required/>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" name="email" id="form3Example1m" class="form-control form-control" value=<?php echo $_SESSION['email'];?> disabled />
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Subject</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" name="subject" id="form3Example1m" class="form-control form-control" placeholder=<?php echo $_SESSION['subject'];?> required/></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Qualification</p>
                    </div>
                    <div class="col-sm-9">
                    <input type="text" name="qualification" id="form3Example1m" class="form-control form-control" placeholder=<?php echo $_SESSION['qualification'];?> required/></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address line1</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="adline1" id="form3Example1m" class="form-control form-control" placeholder=<?php echo $_SESSION['adline1'];?> required/> </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address line2</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="adline2" id="form3Example1m" class="form-control form-control" placeholder=<?php echo $_SESSION['adline2'];?> required/> </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address line3</p>
                    </div>
                    <div class="col-sm-9">
                      <input type="text" name="adline3" id="form3Example1m" class="form-control form-control" placeholder=<?php echo $_SESSION['adline3'];?> required/> </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Description</p>
                    </div>
                    <div class="col-sm-9">
                      <textarea name="description" id="form3Example1m" class="form-control form-control"></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h3 class="mb-0">User picture</h3>
                    </div>
                    <div class="col-sm-9">
                     
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Upload new picture</p>
                    </div>

                    <div class="col-sm-9">
                    <div class="card mb-4" style="box-shadow: none;" >
                  <div class="card-body">
                    <div class="form-outline mb-2">
                    <p class="d-flex justify-content-end pt-1">Maximum file size: 64MB, maximum number of files: 1</p><hr>

                                            
                                              <input type="file" name ="uploadfile" value=""/>    <br><br>
                                              
                                              Accepted file types: <br>

                                              Image files to be optimised, such as badges .gif .jpe .jpeg .jpg .png
                                        </div></div></div>
                    </div>
                  </div>
                  <hr>
                </div>
                <div class="d-flex justify-content-center pt-1">
                                            <input type="reset" class="btn btn-primary btn-lg" value="Reset" name="reset"> &nbsp;
                                            <input type="submit" class="btn btn-primary btn-lg ms-2" value="Submit" name="submit">
                                          </div><br>
              </div>
              
    </form>
    <?php
    $email=$_SESSION['email'];
    $lname=$_SESSION['lname'];
    $fname=$_SESSION['fname'];
    $stream=$_SESSION['stream'];


                            $server="localhost";
                            $username="root";
                            $password="";
                            $database="lms";

                                //create connection
                            $con=new mysqli($server,$username,$password, $database);   
                            if(isset($_POST['submit'])) {
                              $First_name = $_POST['fname'];
                              $Last_name = $_POST['lname'];
                              $subject = $_POST['subject'];
                              $qualification = $_POST['qualification'];
                              $adline1 = $_POST['adline1'];
                              $adline2 = $_POST['adline2'];
                              $adline3 = $_POST['adline3'];
                              $filename = $_FILES["uploadfile"]["name"];
                               $tempname = $_FILES["uploadfile"]["tmp_name"];
                               $folder = "./image/" . $filename;
                              
                              $sql_fname = "UPDATE lecturer SET FirstName='$First_name' WHERE email='$email'";
                              $sql_lname = "UPDATE lecturer SET LastName='$Last_name' WHERE email='$email'";
                              $sql_subject = "UPDATE lecturer SET Subject='$subject' WHERE email='$email'";
                              $sql_qualification = "UPDATE lecturer SET qualification ='$qualification' WHERE email='$email'";
                              $sql_ad1 = "UPDATE lecturer SET Adline1='$adline1' WHERE email='$email'";
                              $sql_ad2 = "UPDATE lecturer SET Adline2='$adline2' WHERE email='$email'";
                              $sql_ad3 = "UPDATE lecturer SET Adline3='$adline3' WHERE email='$email'";
                              $sql_photo = "UPDATE lecturer SET photo='$filename' WHERE email='$email'";


                      mysqli_query($con,$sql_fname);
                      mysqli_query($con,$sql_lname); 
                      mysqli_query($con,$sql_subject); 
                      mysqli_query($con,$sql_qualification);
                      mysqli_query($con,$sql_ad1); 
                      mysqli_query($con,$sql_ad2); 
                      mysqli_query($con,$sql_ad3);
                      mysqli_query($con,$sql_photo); 

                      move_uploaded_file($tempname, $folder);  
                      }
                          $con->close();
                              
                              
                              ?>
              
      </section>

      <!-- footer navigation -->
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
                          <a href="#">knowledgefirstinstitute@gmail.com</a>
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