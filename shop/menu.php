<?php  include ("conn.php" )  ?>

    
    
    <!--menubar start-->
    
    
    <div class="row bg-light">
    <div class="col-sm-1"></div>
    <div class="col-sm-2 bg-light" ><h3  style="line-height: 50px;" >Myshop <span class="fa fa-shopping-bag text-warning"></span></h3></div>
    <div class="col-sm-7">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            
            
            <a class="nav-item nav-link a" href="index.php"><span class="fa fa-home"> </span>&nbsp;Home <span class="sr-only">(current)</span></a>
            
            <a class="nav-item nav-link a" href="about.php"><span class="fa fa-info-circle"></span>&nbsp;AboutUs</a>
            <a class="nav-item nav-link a" href="contactus.php"><span class="fa fa-phone-square"></span>&nbsp;contactus</a>
           <a class="nav-item nav-link a " href="our products.php"><span class="fa fa-shopping-cart"></span>&nbsp;Products</a>
       <?php if (!empty($_SESSION["user_id"])){?>
           <a class="nav-item nav-link a" href="orders.php"><span class="fa fa-sign-in"></span>&nbsp; Order</a>
           <a class="nav-item nav-link a" href="cart1.php"><span class="fa fa-sign-in"></span>&nbsp; cart</a>
          
           <a class="nav-item nav-link a" href="logout.php"><span class="fa fa-caret-square-o-down"></span>&nbsp;logout</a>
           <?php echo $_SESSION["username"]; ?>
           <?php } else{?>
           <a class="nav-item nav-link a" href="signin.php"><span class="fa fa-sign-in"></span>&nbsp; SignIn</a>
           <a class="nav-item nav-link a" href="signup.php"><span class="fa fa-caret-square-o-down"></span>&nbsp;SignUp</a>
          <?php } ?>
        
          </div>
        </div>
      </nav>
    </div>
    <div class="col-sm-2 my-2">
   <div>
        <a href="" class="me-4 text-reset b" style="text-decoration: none;">
          <i class="fa fa-facebook b"></i>
        </a>

        <a href="" class="me-4 text-reset b" style="text-decoration: none;">
          <i class="fa fa-google b"></i>
        </a>
        <a href="" class="me-4 text-reset b" style="text-decoration: none;">
          <i class="fa fa-instagram b"></i>
        </a>
        <a href="" class="me-4 text-reset b" style="text-decoration: none;">
          <i class="fa fa-linkedin b"></i>
        </a>
        <a href="" class="me-4 text-reset b" style="text-decoration: none;">
          <i class="fa fa-github b"></i>
        </a>
      </div>
   </div>
   </div>
  
   <br>
   </div>
   
    <!--menubar end-->