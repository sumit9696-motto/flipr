<?php  include ("../conn.php" )  ?>

<?php

$cat="SELECT * FROM category ";
$user="SELECT * FROM user ";
$item="SELECT * FROM item ";
$user_run=mysqli_query($conn,$user);
$item_run=mysqli_query($conn,$item);
$cat_run=mysqli_query($conn,$cat);
$NUM=mysqli_num_rows($cat_run);   
$NUM1=mysqli_num_rows($user_run);   
$NUM2=mysqli_num_rows($item_run);   

{        ?>






<!DOCTYPE html>
<html>
<head>
<?php  include ("header.php" )  ?>

<style>

  
  </style>
   

</head>

<body>
<?php  include ("menu.php" )  ?>

   

      <br>
      <br>
      <br>
      <br>
         <!--------start card1-------->
       <div class="row  "> 
        <div class="col-sm-2"></div>
        <div class="col-sm-3">

            <div class="card bg-warning text-light p-3" style="width: 20rem;min-height:200px;">
                
                <h1 class ="text-center">Total Iteam</h1>
                <?php
            
            {
             ?>
                <h1 class ="text-center"><span class="fa fa-pencil"></span> <?php echo $NUM2 ;?></h1>
                
                <?php   
}  ?>
          
                    <a href="iteam.php" class="text-center">
                <button class="btn btn-light mb-2  mx-5"  onclick=" " style="text-align:center">See All Iteam</button>
                       </a>
              </div>
        </div>
        <div class="col-sm-2"></div>
        <div class="col-sm-3">

            <div class="card bg-warning text-light p-3"  style="width: 20rem; min-height:200px">
            <h1 class ="text-center">Total Category</h1>
            <?php
            
{
 ?>
            <h1 class ="text-center"> <span class=" fa fa-shopping-bag"></span>&nbsp;<?php echo $NUM ;?></h1>
            <?php   
}  ?>
          
          <?php    }
          
          ?>
          <a  href="category.php"  class="text-center">
            <button class="btn btn-light mb-2 mx-5" onclick=" ">See All Iteam</button>
            </a>
              </div>
        </div>
        <div class="col-sm-2"></div>
       </div>
         <br>
         <br>
       <!-----------end card----------------->

        <!--------start card2-------->
<div class="row">
          <div class="col-sm-2"></div>
         
          <div class="col-sm-3">

            <div class="card  bg-warning text-light p-3" style="width: 20rem; min-height:200px">
            <h1 class ="text-center">Total User</h1>
            <h1 class ="text-center"><span class=" fa fa-user"></span>&nbsp;<?php echo $NUM1 ;?></h1>
            <a  href="userdetails.php" class="text-center">
            <button class="btn btn-light mb-2 mx-5" onclick="">See All Iteam</button>
                 </a>
              </div>

          </div>
          <div class="col-sm-2"></div>
          <div class="col-sm-3">

            <div class="card   bg-warning text-light p-3" style="width: 20rem; min-height:200px">
            <h1 class ="text-center">Total Order</h1>
            <h1 class ="text-center"><span class=" fa fa-shopping-cart"></span> &nbsp;5 </h1>
            <button class="btn btn-light mb-2 mx-5">See All Iteam</button>
              </div>

          </div>
          <div class="col-sm-2"></div>

</div>



         <!--------end card2-------->
         <br>
         <br>
         <br>
         <br>


         <!-----start--footer- ---------->
         <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
</body>
</html>