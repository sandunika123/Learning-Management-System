<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
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
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      </head>
    <body>
        <form action="" method="post">
        <section class="h-100 bg-light">
            <div class="container py-5 h-100"  >
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="../img/signup.webp" 
                              alt="Sample photo" class="img-fluid" 
                              style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                          </div>
                      <div class="col-xl-6">
                        <div class="card-body p-md-5 text-black">
                          <center><h3 class="mb-5 text-uppercase">Student registration form</h3></center>
          
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="form-outline">
                                <h6><label class="form-label" for="form3Example1m">First name</label></h6>
                                <input type="text" name="fname" id="form3Example1m" class="form-control form-control" />    
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                              <div class="form-outline">
                              <h6><label class="form-label" for="form3Example1n">Last name</label></h6>
                                <input type="text" name="lname" id="form3Example1n" class="form-control form-control" />
                              </div>
                            </div>
                            </div>

                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                              <h6 class="mb-0 me-4">Gender: </h6>
            
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
            
          
                          <div class="form-outline mb-3">
                          <h6><label class="form-label" for="form3Example8">E-mail Address</label></h6>
                            <input type="text" name="email" id="form3Example8" class="form-control form-control" />    
                          </div>

                          <div class="form-outline mb-3">
                          <h6><label class="form-label" for="form3Example8">Password</label></h6>
                            <input type="password" name="password" id="psw" name="psw" class="form-control validate" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one 
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
                    
                          <div class="row">
                            <div class="col-md-6 mb-3">
                            <h6><label class="form-label" for="form3Example8">Subjects you follow</label></h6>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-2">
                            <h6><label class="form-label" for="form3Example8">Stream</label></h6>
                            </div>
                            <div class="col-md-6 mb-2">
          
                              <select class="select" name="stream">
                                <option value="Physical Science">Physical Science</option>
                                <option value="Bio Science">Bio Science</option>
                                <option value="Commerce">Commerce</option>
                                <option value="Arts">Arts</option>
                                <option value="Technology">Technology</option>
                              </select>
          
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="form-outline">
                                <input type="text" name="sub1" id="form3Example1m" class="form-control form-control" placeholder="Subject 1"/>    
                              </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="form-outline">
                                <input type="text" name="sub2" id="form3Example1n" class="form-control form-control" placeholder="Subject 2"/>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-outline">
                                  <input type="text" name="sub3" id="form3Example1n" class="form-control form-control" placeholder="Subject 3"/>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="d-flex justify-content-center pt-1">
                            <input type="reset" class="btn btn-primary btn-lg" name="reset" value="Reset">
                            <input type="submit" class="btn btn-primary btn-lg ms-2" name="submit" value="Submit">
                          </div>
                        
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </form>
        <?php
                            $server="localhost";
                            $username="root";
                            $password="";
                            $database="lms";

                                //create connection
                            $con=new mysqli($server,$username,$password, $database);   
                                 
                            if(isset($_POST['submit'])) {
                                $First_name = $_POST['fname'];
                                $Last_name = $_POST['lname'];
                                $Gender = $_POST['gender'];
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                $stream = $_POST['stream'];
                               $sub1 = $_POST['sub1'];
                                $sub2 = $_POST['sub2'];
                                $sub3 = $_POST['sub3'];
                                
                                $sql_insert = "INSERT INTO student(FirstName,LastName,gender,email,password,stream,subject1,subject2,subject3)
                                VALUES('$First_name', '$Last_name', '$Gender','$email','$password',
                                '$stream','$sub1', '$sub2', '$sub3')";

                        mysqli_query($con,$sql_insert);
                             
                        
                        $headers = "From: 2019t00430@stu.cmb.ac.lk\r\n";
                        $to = $email ;

                      $email_subject = "Welcome to KnowledgeFirest!";

                      $email_body = "Hi $Last_name,\nThank you for registering with us.\nYour login details are as follows. \nEmail : $email \n Password : $password \n Explore the unlimited learning opportunities."; 


                        $send_mail=mail($to, $email_subject, $email_body,$headers);
                        if($send_mail){
                            ?><script>alert("Login details are sent successfully")</script><?php
                           
                        }
                        else{
                            
                            ?><script>alert("Login details are not sent successfully")</script><?php
                        }
                            $con->close();
                      }
                            ?>
          <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>