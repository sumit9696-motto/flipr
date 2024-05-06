
<?php session_start(); include ("conn.php" )  ?>


<?php  
if(!empty($_SESSION["user_id"])){

  header("Location:http://localhost/shop/index.php");
}


?>
<!DOCTYPE html>
<html>
<?php  include "header.php"   ?>
    <body>
    <?php  include "menu.php"   ?>

    

     
  <br>

        
        <div class="row">

            <div class="col-sm-1"></div>

            <div class="col-sm-10 bg-light">

              <section class="vh-200 gradient-custom ">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                      <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
              
                          <div class="mb-md-5 mt-md-4 pb-5">
              
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <p class="text-white-50 mb-5">Please enter your login and password!</p>
                         <form method="post" action="signin.php">
                          
                       
                            <div class="form-outline form-white mb-4">
                              <input type="text" id="typeEmailX" class="form-control form-control-lg" required  name="username"/>
                              <label class="form-label" for="typeEmailX">Email</label>
                            </div>
              
                            <div class="form-outline form-white mb-4">
                              <input type="password" id="typePasswordX" class="form-control form-control-lg" required name="password"/>
                              <label class="form-label" for="typePasswordX">Password</label>
                            </div>
              
                          
              
                            <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
                            </form>

                            <?php 
                            if(isset($_POST['login'])){
                              include "conn.php"  ;
                              $username= mysqli_real_escape_string($conn,  $_POST['username']);
                            
                               $password=$_POST['password'];
                         echo     $sql="SELECT id, email, role FROM user WHERE email='{$username}' AND password='{$password}'";
                              
                               $result =mysqli_query($conn,$sql);
                               
                               if(mysqli_num_rows($result) > 0 ){
                                 
                                while($row=mysqli_fetch_assoc($result)){
                                  
                                  $_SESSION["username"]= $row['email'];
                                  $_SESSION["user_id"]= $row['id'];
                                  $_SESSION["role"]= $row['role'];
                                
                                echo  "<script>alert('login successfuly ....');window.location.href='index.php'</script>";}
                               }else{
                                echo  "<script>alert('check user id and password....');window.location.href='signin.php'</script>";

                               }

                               }
                            ?>
                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                              <a href="#!" class="text-white"><i class="fa fa-facebook-f fa-lg"></i></a>
                              <a href="#!" class="text-white"><i class="fa fa-twitter fa-lg mx-4 px-2"></i></a>
                              <a href="#!" class="text-white"><i class="fa fa-google fa-lg"></i></a>
                            </div>
              
                          </div>
              
                          
                            
                            
                          
              
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
         <br>

         <?php  include "footer.php"   ?>
         
    </body>

</html>