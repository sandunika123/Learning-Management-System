<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
.alert {
  padding: 10px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
  
}

.closebtn:hover {
  color: black;
}
</style>
  </head>
  <body>
    <section class="vh-100" style="background-color: #ebedf3;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-9">
              <div class="card" style="border-radius: 1rem; height: 520px;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="../img/login.webp"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      
                    <form action="" method="post">
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0"><img src="../img/logo.PNG" alt="Logo" width="60" height="60" class="d-inline-block align-text-top"> 
            
                            <b><font style="font-family:'calibri'; font-size: 23px;" >LMS - Knowledge First Institute</font>  </b></span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                        
       
                        <div class="form-outline mb-3">
                          <input type="text" id="form2Example17" class="form-control form-control-lg" name="email" placeholder="Email address" required/>
                          
                        </div>
      
                        <div class="form-outline mb-5">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" placeholder="Password" required/>
                          
                        </div>
      
                        <div class="d-grid gap-2">
                          <input class="btn btn-primary" type="submit" name="submit" value="login"></button>
                        </div>
                     
                        <a class="small text-muted" href="forgot-password.php">Forgot password?</a> <br><br>
                        <p>Don't have an account? <a href="signup.html" class="link-info">Register here</a></p>
                           

                      </form>
      
                      <?php
                            $server="localhost";
                            $username="root";
                            $password="";
                            $database="lms";

                                //create connection
                            $con=new mysqli($server,$username,$password, $database);  
                            $answer = 0;
                            session_start(); 

                            //include "db_conn.php";

                            if (isset($_POST['submit'])) {
                              $email= $_POST['email'];
                              $password= $_POST['password'];


                              $selectuser="SELECT * FROM lecturer";
                              $result=$con->query($selectuser);
                              if($result->num_rows>0){
                              while($row=$result->fetch_assoc()){
                                if ($row['Email'] === $email && $row['Password'] === $password){
                                  echo "<script> window.open('lectureassignment.php','_self');</script> ";
                                  $_SESSION['email'] = $row['Email']; 
                                  $_SESSION['fname'] = $row['FirstName']; 
                                  $_SESSION['lname'] = $row['LastName'];
                                  $_SESSION['photo'] = $row['photo'];
                                  $_SESSION['subject'] = $row['Subject'];
                                  $_SESSION['qualification'] = $row['Qualification'];
                                  $_SESSION['adline1'] = $row['Adline1'];
                                  $_SESSION['adline2'] = $row['Adline2'];
                                  $_SESSION['adline3'] = $row['Adline3'];
                                  $ans = 1;
                                  $answer = &$ans;
                                  break;
                                  
                                }
                              }}
                               if ($answer==0){
                                $selectuser="SELECT * FROM student";
                                $result=$con->query($selectuser);
                                if($result->num_rows>0){
                                while($row=$result->fetch_assoc()){
                                  if ($row['email'] === $email && $row['password'] === $password){
                                    echo "<script> window.open('st dashboad.php','_self');</script> ";
                                    $_SESSION['email'] = $row['email']; 
                                    $_SESSION['fname'] = $row['FirstName']; 
                                    $_SESSION['lname'] = $row['LastName'];
                                    $_SESSION['sub1'] = $row['subject1'];
                                    $_SESSION['sub2'] = $row['subject2'];
                                    $_SESSION['sub3'] = $row['subject3'];
                                    $_SESSION['photo'] = $row['photo'];
                                    $_SESSION['stream'] = $row['stream'];
                                    $ans = 2;
                                    $answer = &$ans;
                                    break;
                                    
                                  }
                                }}}
                                if($email=='admin' && $password=='admin'){
                                  echo "<script> window.open('index.php','_self');</script> ";

                                }
                                $_SESSION['status'] = $answer;
                                
                                if ($answer==0){?><p class='alert'>
                                  <span class='closebtn' onclick="this.parentElement.style.display='none';">&times;</span> 
                                   E-mail or Password is incorret.
                                        </p>
                                     <?php
                                      
                            }  }
                           
                                    
                      ?>         
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>