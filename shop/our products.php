
<?php session_start(); include ("conn.php" )  ?>

<!DOCTYPE html>
<html>

<?php  include "header.php"   ?>

<body>
<?php  include "menu.php"   ?>
    


      <!--products start-->

      <br>
      

   <div class="row  bg-light">
    

    <div class="col-sm-3">
      <div class="card" style="width: 18rem;">
        <div class="card-header">
          Products
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">All iphone</li>
          <li class="list-group-item">All iphone charger</li>
          <li class="list-group-item"> All iphone cover</li>
        </ul>
      </div>
    </div>


    <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..//shop/image/hd3.jpg" alt="Card image cap"   style="height: 300px; width: 285px;">
        <div class="card-body">
          <h5 class="card-title"> All iphone </h5>
          
          
          <a href="#" class="btn btn-primary">check here</a>
          
        </div>
      </div>

    </div>
    <div class="col-sm-1"></div>

    <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..//shop/image/ch1.jpg" alt="Card image cap"   style="height: 300px; width: 285px;">
        <div class="card-body">
          <h5 class="card-title">All iphone charger</h5>
          
          
          <a href="#" class="btn btn-primary">check here</a>
          
        </div>
      </div>
    </div>

    <div class="col-sm-1"></div>
    <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..//shop/image/ap3.jpg" alt="Card image cap"   style="height: 300px; width: 285px;">
        <div class="card-body">
          <h5 class="card-title"> All iphone cover</h5>
          
          
          <a href="#" class="btn btn-primary">check here</a>
          
        </div>
      </div>
    </div>
    <div class="col-sm-1"></div>
   </div>
      

   <br>
   <br>
   <br>
    <!--products end-->



    <?php  include "footer.php"   ?>


</body>

</html>