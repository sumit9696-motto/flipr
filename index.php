<?php session_start(); include ("conn.php" )  ?>


<?php

if(empty($_SESSION["user_id"])){

  header("Location:http://localhost/shop/signin.php");
}

$item="SELECT * FROM item limit 8";
$item_run=mysqli_query($conn,$item);
if(mysqli_num_rows($item_run)>0 )
{?>










<!DOCTYPE html>
<html>
<!--header start -->

<?php  include ("header.php" )  ?>

 
<!--header end -->
<body class="container-fluid">
<?php  include "menu.php"   ?>

    

    <!--slider start-->


    
    <div class="row mt-2">

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="..//shop/image/n5.jpg" style="height: 600px;" style="width: 100%;"  class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..//shop/image/n1.jpg" style="height: 600px;" style="width: 100%;" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..//shop/image/n4.jpg" style="height: 600px;" style="width: 100%;" class="d-block w-100" alt="...">
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
      <br>
    <!--slider end-->


    <!--ourproducts start-->

<div class="row my-5 ">


<h1 class="text-center">Our Products</h1> 
<?php
            while($item_row = mysqli_fetch_array($item_run))
{
 ?>

<div class="col-sm-3 my-5">
  <div class="box">
    <div class="card" style="width: 18rem;">
      
        <img class="card-img-top"  src="admin/img/<?php echo $item_row[2] ?>" alt="Card image cap"  style="height: 250px;">
      
        <div class="card-body">
          <h5 class="card-title"> <?php echo $item_row['itemname'];?> </h5>
          <p class="card-text"> <?php echo $item_row['category'];?> </p>
          <p class="card-text">M.R.P-₹<del> <?php echo $item_row['price'];?></del><br> <?php echo $item_row['disprice'];?></p>
          <a href="orders.php?productid=<?php  echo $item_row['id']; ?>&itempic=<?php  echo $item_row[2]; ?>&userid=6&price=<?php echo $item_row['price'];?>&disprice=<?php echo $item_row['disprice'];?>&productname=<?php echo $item_row['itemname'];?>&categoryname=<?php echo $item_row['category'];?>"" class="btn btn-primary">Buy now</a>
          <a class="btn btn-primary" href="cart.php?productid=<?php  echo $item_row['id']; ?>&userid=<?php echo $_SESSION["user_id"];?>&price=<?php echo $item_row['price'];?>&disprice=<?php echo $item_row['disprice'];?>&productname=<?php echo $item_row['itemname'];?>&categoryname=<?php echo $item_row['category'];?>">My cart</a>
        </div>
      </div>
  </div>
</div>
<?php   
}  ?>
 <?php    }
          else{
            echo "not record found";
          }
          
          
          ?>
</div>










    <!--ourproducts end-->
    <!--ourservices start-->

    <div class="row my-5">
        <h2 class="text-dark text-center">Our Services</h2>
        <br>
        <br>
        <br>
        <div class="col-sm-1 mx-2"></div>
        
        <div class="col-sm-3 mx-2">

          <div class="box">
          <div class="card" style="width: 18rem;">
          
          
            <img class="card-img-top" src="..//shop/image/e1.png" alt="Card image cap" style="height: 300px; width: 285px;">
          
            <div class="card-body">
              <h5 class="card-title">Mobile Exchange</h5>
              <p class="card-text">we are changes a mobile iphone </p>
              <a href="#" class="btn btn-primary">check here</a>
              
            </div>
          </div>
          </div>
        </div>






        <div class="col-sm-3 mx-2">
          <div class="box">
          <div class="card" style="width: 18rem;">
          
            <img class="card-img-top" src="../shop/image/h1.png" alt="Card image cap" style="height: 300px; width: 285px;">
        
            <div class="card-body">
              <h5 class="card-title">Home delivery</h5>
              <p class="card-text">we are delivery our all products</p>
              <a href="#" class="btn btn-primary">check here </a>
              
            </div>
          </div>
          </div>
        </div>


        <div class="col-sm-3 mx-2">
          <div class="box">
          
          <div class="card" style="width: 18rem;">
                    
            <img class="card-img-top" src="..//shop/image/r1.jpg" alt="Card image cap" style="height: 300px; width: 285px;">
                    
            <div class="card-body">
              <h5 class="card-title">Mobile Repair</h5>
              <p class="card-text">we are repair all  type iphone</p>
              <a href="#" class="btn btn-primary">check here</a>
              
            </div>
          </div>
          </div>
        </div>
        <div class="col-sm-1 mx-2"></div>

    </div>
    <br>
    <!--ourservices end-->















</div>
<script src="js/jqury.js"> </script>
    <script src="js/bootstrap.js"></script>
    <?php  include "footer.php"   ?>
</body>
</html>