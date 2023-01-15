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
  li{
    list-style-type: none;
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
    <br>
      <!-- main content -->
      <div style='padding-left: 40px;'> <a href="" style="text-decoration: none;">Home&nbsp;/&nbsp;Dashboard</a><br><br></div>
      <center><div class="card w-75" >
      <h5 class="card-header">Upload Lecture Materials</h5>
            <div class="card-body">
      <div id="content">
		  <form method="POST" action="" enctype="multipart/form-data">
            
			<div class="form-group">
      <div class="form-group">
				<input class="form-control" type="text" name="title" value=""required placeholder="enter title"/>
			</div>
				<input class="form-control" type="file" name="uploadfile" value="" required/>
			</div>
			<!-- <div class="form-group"> -->
				<button class="btn btn-primary" type="submit" name="upload" required>UPLOAD</button>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Success! message sent successfully.
        </div>
        
			</div>
		</form>
	</div>
    </div>
    <script>
        $(document).ready(function () {
            $('button').click(function () {
                $('.alert').show()
            })
        });
    </script>
    </center></div><br>
          <?php

error_reporting(0);

$msg = "";
$subject=$_SESSION['subject'];
echo "<font color='black'><br><p style='padding-left: 40px; font-weight: bold; font-size: 35px ;' > Course Content - $subject </p></font>";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./notes/" . $filename;
  $title = $_POST['title'];

	$db = mysqli_connect("localhost", "root", "", "lms");

	// Get all the submitted data from the form
	$sql = "INSERT INTO subject (name,document,title) VALUES ('$subject','$filename','$title')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	// move_uploaded_file($tempname, $folder) ;
move_uploaded_file($tempname, $folder);
		
	
}

                            $server="localhost";
                            $username="root";
                            $password="";
                            $database="lms";

                                //create connection
                            $con=new mysqli($server,$username,$password, $database);  
                              $selectuser="SELECT * FROM subject where name='$subject'";
                              $result=$con->query($selectuser);
                              if($result->num_rows>0){
                                  while($row=$result->fetch_assoc()){  
                                    $newtitle = $row['title']; 
                                  $new =$row['document'];
                                  echo "<div style='padding-left: 40px; padding-right: 20px';>
                                  <div class='card' >
                                  
                                  <div class='card-body'>
                                  <font color='black'><h5 class='card-title'>$newtitle</h4></font>
                                  <div class='container'>
                                    <div class='row'>
                                      <div class='col-sm'>
                                      <p class='card-text'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16'' fill='currentColor' class='bi bi-file-earmark-pdf' viewBox='0 0 16 16'>
                                      <path d='M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z'/>
                                      <path d='M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697
                                       19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z'/>
                                    </svg>&nbsp; <a href='./notes/$new'>$new</a></p>
                                      </div>
                                      <div class='col-sm'><form action='' method='post'>
                                      <span class='d-flex justify-content-end'><input class='btn btn-primary' type='submit' name='delete' value='Delete' onclick='deletedata()'></button></span></form>
                                      </div>
                                    </div>
                                  </div>
                                    </div>
                                  </div>
                                </div>
                                
                                ";}}
                                if (isset($_POST['delete'])) {
                                  
                                  $sql_delete="DELETE FROM subject WHERE document='$new'";
                                  $con->query($sql_delete);
                              }
                               ?>  
                              <script>
                                function deletedata(){
                                  alert("File deleted successfully");
                                }
                              </script>     
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
  </body>
</html>