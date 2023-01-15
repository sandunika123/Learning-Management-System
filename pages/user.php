<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 10px;
  margin-top: 5px;
}

#message div {
  padding: 10px 35px;
  font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
p.success{
    background:green;
    color:white;
    padding:15px;
    text-align:center;
}
p.error{
    background:red;
    color:white;
    padding:15px;
    text-align:center;
}
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lecturer</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-text mx-3">Knowledge First Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                      </svg>
                    &nbsp;
                    <span>Users</span>
                </a>
                <div id="collapseUtilities" class="collapse show" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="user.php">Lecturers</a>

                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>

                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="./image/blankprofile.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="h3 mb-1 text-gray-800">Find Lecturers</h1>
                        <div class="row ">
                            
                        </div>

                </div>



                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-1 text-gray-800">Add Lecturers</h1>
                    
                    <!-- Content Row -->
                    <div class="row ">

                        <!-- First Column -->
                        <div class="col-lg-8">
                         <form action ='#'method='POST'  enctype="multipart/form-data">
                            <!-- Custom Text Color Utilities -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Enter Lecturer Details</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                          <div class="form-outline">
                                            <h6><label class="form-label" for="form3Example1m">First name</label></h6>
                                            <input type="text" id="form3Example1m" name ="firstname" class="form-control form-control" required/>    
                                          </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                          <div class="form-outline">
                                          <h6><label class="form-label" for="form3Example1n">Last name</label></h6>
                                            <input type="text" id="form3Example1n" name ="lastname" class="form-control form-control" required/>
                                          </div>
                                        </div>
                                        </div>
                                
                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
            
                                          <h6 class="mb-0 me-4">Gender: </h6> &ensp;
                        
                                          <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                                              value="option1" />
                                            <label class="form-check-label" for="femaleGender">Female</label>
                                          </div>
                        
                                          <div class="form-check form-check-inline mb-0 me-4">
                                            <input class="form-check-input" type="radio" name="gender" id="maleGender"
                                              value="option2" />
                                            <label class="form-check-label" for="maleGender">Male</label>
                                          </div>
                        
                                          <div class="form-check form-check-inline mb-0">
                                            <input class="form-check-input" type="radio" name="gender" id="otherGender"
                                              value="option3" />
                                            <label class="form-check-label" for="otherGender">Other</label>
                                          </div>
                                          
                                        </div>
                                        
                                        <div class="form-outline mb-2">
                                            <h6><label class="form-label" for="form3Example8">Upload a photo</label></h6>
                                              <input type="file" name ="uploadfile" value=""/>    
                                        </div>
				                            
			                            
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                            <h6><label class="form-label" for="form3Example1n">Address</label></h6>
                                            </div>
                                          </div>
                                        <div class="row">
                                          <div class="col-md-6 mb-3">
                                            <div class="form-outline">
                                              <input type="text" id="form3Example1n" name ="line1" class="form-control form-control" placeholder="line 1"/>
                                            </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                            <div class="form-outline">
                                              <input type="text" id="form3Example1n" name ="line2" class="form-control form-control" placeholder="line 2"/>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                              <div class="form-outline">
                                                <input type="text" id="form3Example1n" name ="line3" class="form-control form-control" placeholder="line 3"/>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="form-outline mb-2">
                                            <h6><label class="form-label" for="form3Example8">E-mail Address</label></h6>
                                              <input type="text" id="form3Example8" name ="email" class="form-control form-control" required/>    
                                        </div>
                  
                                        <div class="form-outline mb-2">
                                            <h6><label class="form-label" for="form3Example8">Password</label></h6>
                                              <input type="password" id="psw" name="password" class="form-control validate" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one 
                                              number and one uppercase and lowercase letter, and at least 8 or more characters" required>   
                                        </div>
                                        <div id="message">
                                            <h6>Password must contain the following:</h6>
                                            <div id="letter" class="invalid">A <b>lowercase</b> letter</div>
                                            <div id="capital" class="invalid">A <b>capital (uppercase)</b> letter</div>
                                            <div id="number" class="invalid">A <b>number</b></div>
                                            <div id="length" class="invalid">Minimum <b>8 characters</b></div>
                                        </div>
                
                                        <script>
                                            var myInput = document.getElementById("psw");
                                            var letter = document.getElementById("letter");
                                            var capital = document.getElementById("capital");
                                            var number = document.getElementById("number");
                                            var length = document.getElementById("length");
                                            
                                            // When the user clicks on the password field, show the message box
                                            myInput.onfocus = function() {
                                              document.getElementById("message").style.display = "block";
                                            }
                                            
                                            // When the user clicks outside of the password field, hide the message box
                                            myInput.onblur = function() {
                                              document.getElementById("message").style.display = "none";
                                            }
                                            
                                            // When the user starts to type something inside the password field
                                            myInput.onkeyup = function() {
                                              // Validate lowercase letters
                                              var lowerCaseLetters = /[a-z]/g;
                                              if(myInput.value.match(lowerCaseLetters)) {  
                                                letter.classList.remove("invalid");
                                                letter.classList.add("valid");
                                              } else {
                                                letter.classList.remove("valid");
                                                letter.classList.add("invalid");
                                              }
                                              
                                              // Validate capital letters
                                              var upperCaseLetters = /[A-Z]/g;
                                              if(myInput.value.match(upperCaseLetters)) {  
                                                capital.classList.remove("invalid");
                                                capital.classList.add("valid");
                                              } else {
                                                capital.classList.remove("valid");
                                                capital.classList.add("invalid");
                                              }
                                            
                                              // Validate numbers
                                              var numbers = /[0-9]/g;
                                              if(myInput.value.match(numbers)) {  
                                                number.classList.remove("invalid");
                                                number.classList.add("valid");
                                              } else {
                                                number.classList.remove("valid");
                                                number.classList.add("invalid");
                                              }
                                              
                                              // Validate length
                                              if(myInput.value.length >= 8) {
                                                length.classList.remove("invalid");
                                                length.classList.add("valid");
                                              } else {
                                                length.classList.remove("valid");
                                                length.classList.add("invalid");
                                              }
                                            }
                                        </script>
                                        
                                        <div class="form-outline mb-3">
                                            <h6><label class="form-label" for="form3Example8">Subject</label></h6>
                                              <input type="text" id="form3Example8" name ="subject" class="form-control form-control" required />    
                                        </div>  
                                        <div class="form-outline mb-3">
                                            <h6><label class="form-label" for="form3Example8">Qualification</label></h6>
                                              <textarea id="form3Example9" name ="qualification" class="form-control form-control" required > </textarea>   
                                        </div>

                                        <div class="d-flex justify-content-center pt-1">
                                            <input type="reset" class="btn btn-primary btn-lg" value="Reset" name="reset"> &nbsp;
                                            <input type="submit" class="btn btn-primary btn-lg ms-2" value="Submit" name="submit">
                                          </div>
                                </div>

                                </div>
                            </div>  
                        </form>  
                        <?php
                        $status='';
                            $server="localhost";
                            $username="root";
                            $password="";
                            $database="lms";

                                //create connection
                            $con=new mysqli($server,$username,$password, $database);   
                                 
                            if(isset($_POST['submit'])) {
                                $First_name = $_POST['firstname'];
                                $Last_name = $_POST['lastname'];
                                $Gender = $_POST['gender'];
                                $line1 = $_POST['line1'];
                                $line2 = $_POST['line2'];
                                $line3 = $_POST['line3'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $subject = $_POST['subject'];
                               $qualification = $_POST['qualification'];
                               $filename = $_FILES["uploadfile"]["name"];
                               $tempname = $_FILES["uploadfile"]["tmp_name"];
                               $folder = "./image/" . $filename;
                                
                                $sql_insert = "INSERT INTO lecturer(FirstName,LastName,Gender,Adline1,Adline2,Adline3,Email,Password,Subject,Qualification,photo)
                                VALUES('$First_name', '$Last_name', '$Gender','$line1', '$line2', '$line3','$email','$password',
                                '$subject','$qualification','$filename')";

                        mysqli_query($con,$sql_insert);
                            
                            move_uploaded_file($tempname, $folder);

                            $headers = "From: 2019t00430@stu.cmb.ac.lk\r\n";
                            $to = $email ;

	                        $email_subject = "Welcome to KnowledgeFirest!";

	                        $email_body = "Hi $Last_name,\nCongradulations!!\n You are selected as a Lecturer to our team.\nYour login details are as follows. \nEmail : $email \n Password : $password \n Thank you for joining with us.\n"; 


                            $send_mail=mail($to, $email_subject, $email_body,$headers);
                            if($send_mail){
                                ?><script>alert("Login details are sent successfully")</script><?php
                               
                            }
                            else{
                                
                                ?><script>alert("Login details are not sent successfully")</script><?php
                            }
                            
                        }
                            $con->close();
                            
                            ?>
                            
                        </div>
                </div>


                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
</body>

</html>