<?php   session_start();
if(isset($_SESSION["username"])){

  header("Location:http://localhost/shop/index.php");
}?>

<?php  include ("conn.php" )  ?>
<?php 


if(isset($_POST['sub'])){

  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $dob=$_POST['dob'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $pin=$_POST['pin'];
  $address=$_POST['address'];


  $query="INSERT INTO user(fname,lname,dob,gender,email,phone,password,address,pin)
  VALUES ('$fname', '$lname', '$dob',' $gender','$email','$phone','$password','$address','$pin')";
  $query_run=mysqli_query($conn,$query);

  if($query_run)
  {
    echo"<script>alert('Signup successfuly ....');window.location.href='signin.php'</script>";
    
    // header("Location: signin.php");
  }
  else{
    echo"<script>alert('Try Again ....');window.location.href='signup.php'</script>";
  }
}



?>



<!DOCTYPE html>
<html>
    <head>
    <?php  include "header.php"   ?>


   
    </head>
    <body>
    <?php  include "menu.php"   ?>
        
    
 
  <br>


        <div class="row">

            <div class="col-sm-1"></div>

            <div class="col-sm-10 bg-light">

              <section class="vh-200 gradient-custom">
                <div class="container py-5 h-100">
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-12 col-lg-9 col-xl-7">
                      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                          <form  method="post" action="signup.php">
              
                            <div class="row">
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="firstName" class="form-control form-control-lg"  name="fname" required />
                                  <label class="form-label" for="firstName">First Name</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="text" id="lastName" class="form-control form-control-lg"name="lname"  required/>
                                  <label class="form-label" for="lastName">Last Name</label>
                                </div>
              
                              </div>
                            </div>
              
                            <div class="row">
                              <div class="col-md-6 mb-4 d-flex align-items-center">
              
                                <div class="form-outline datepicker w-100">
                                  <input type="date" class="form-control form-control-lg" id="birthdayDate" name="dob" required />
                                  <label for="birthdayDate" class="form-label">Birthday</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
              
                                <h6 class="mb-2 pb-1">Gender: </h6>
              
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio"  id="femaleGender"
                                    value="Female" checked  name="gender"  required/>
                                  <label class="form-check-label" for="femaleGender">Female</label>
                                </div>
              
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio"  id="maleGender"
                                    value="Male" name="gender"  required/>
                                  <label class="form-check-label" for="maleGender">Male</label>
                                </div>
              
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="otherGender"
                                    value="Other" name="gender"  required/>
                                  <label class="form-check-label" for="otherGender">Other</label>
                                </div>
              
                              </div>
                            </div>
              
                            <div class="row">
                              <div class="col-md-6 mb-4 pb-2">
              
                                <div class="form-outline">
                                  <input type="email" id="emailAddress" class="form-control form-control-lg" name="email"  required/>
                                  <label class="form-label" for="emailAddress">Email</label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4 pb-2">
              
                                <div class="form-outline">
                                  <input type="number" id="phoneNumber" class="form-control form-control-lg" name="phone" required/>
                                  <label class="form-label" for="phoneNumber">Phone Number</label>
                                </div>
              
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6 mb-4">
              
                                <div class="form-outline">
                                  <input type="password" id="firstName" class="form-control form-control-lg" name="password" required/>
                                  <label class="form-label" for="firstName">Password </label>
                                </div>
              
                              </div>
                              <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="number" id="number" class="form-control form-control-lg" name="pin"  required/>
                                <label class="form-label" for="lastName">Pincode</label>
                              </div>
                               
              
                              </div>
                            </div>


                            <!------------------------->

                            
                            <div class="col-md-12 mb-4">
                            <div class="form-outline">
                                <input id="textarea"  rows="4" cols="40" class="form-control form-control-lg" name="address"  required/>


                                  <!-- <input type="textarea" id="lastName" class="form-control form-control-lg" /> -->
                                  <label class="form-label" for="textarea">Address </label>
                                </div>


                            </div>
                            



                            <!--------------------------->
                           
              
                            <div class="mt-4 pt-2">
                              <input class="btn btn-primary btn-lg" type="submit" value="Submit" name="sub" required />
                            </div>
              
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
<div class="col-sm-1"></div>
            
         </div>
         <br>
         <br>
         <br>
         <br>

         <?php  include "footer.php"   ?>
         
    </body>

</html>