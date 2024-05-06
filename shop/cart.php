<?php  include ("conn.php" )  ?>
<?php   session_start();
if(!isset($_SESSION["username"])){

  header("Location:http://localhost/shop/index.php");
}


?>





<?php
$productid=$_GET['productid'];
$userid=$_GET['userid'];
$productprice=$_GET['price'];
$disprice=$_GET['disprice'];
$productname=$_GET['productname'];
$categoryname=$_GET['categoryname'];
$item_run=mysqli_query($conn,"INSERT INTO `cart`(`itemname`, `itempic`, `price`, `disprice`, `category`, `iteminfo`, `cdate`, `up_date`, `userid`) VALUES ('$productname','','$productprice','$disprice','$categoryname','','','','$userid')");

$item="SELECT * FROM cart WHERE userid=$userid";
$item_run=mysqli_query($conn,$item);
if(mysqli_num_rows($item_run)>0 )
{?>




<!DOCTYPE html>
<html>
  
<head>
<?php  include ("header.php" )  ?>


</head>


<body>

        <!-------start navbar----------->
        <?php  include ("menu.php" )  ?>
  
        <!-----end---navbar--------->



          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <table >
                <tr>
                    <th style="padding: 25px;">id</th>
                    <th style="padding: 25px;">Iteam name</th>
                    <th style="padding: 25px;">price</th>
                    <th style="padding: 35px; ">discount</th>
                    <th style="padding: 25px;">item pic</th>
                    <th style="padding: 25px;">item category</th>
                   
                    <th style="padding: 25px;">edit</th>
                    <th style="padding: 25px;">delete</th>
                </tr>
                <?php
            while($item_row = mysqli_fetch_array($item_run))
{
 ?>
                <tr>
                    <td><?php echo $item_row['id'];?></td>
                    <td><?php echo $item_row['itemname'];?></td>
                    <td>Rs- <?php echo $item_row['price'];?></td>
                    <td>Rs-<?php echo $item_row['disprice'];?></td>
                    
                    <td ><img src="img/<?php echo $item_row[2] ?>" height="70px" width="100px" class="  clogo "></td>
                    <td><?php echo $item_row['category'];?></td>
                    
                   
                   
                    <td><button class="btn btn-dark"><a href="updateitem.html" style="text-decoration: none;"class= "text-light";>Order</a></button></td>
                    
                    <form action ="cart.php"; method="post":>
                    <input type="hidden" id="form6Example3" class="form-control" name="delete_id" value="<?php echo $item_row['id'];?>" />
                    <td><button class="btn btn-dark" type="sumbit" name="delete_btn">Cancle</button></td>
</form>
                </tr>
                <?php   
}  ?>
              </table>

              <?php    }
          else{
            echo "not record found";
          }
          
          
          ?>


<?php 
if(isset($_POST['delete_btn'])){
  $delete=$_POST['delete_id'];
  $delete_query="DELETE FROM cart WHERE id ='$delete'";
  $delete_query_run=mysqli_query($conn,$delete_query);
  if($delete_query_run){
    echo"<script>alert('Iteam Delete successfuly ....');window.location.href='cart1.php'</script>";
  }
  else{
    echo "not delete succesfull";
  }
}

?>
            </div>
            <div class="col-sm-2"></div>
          </div>




           <!-----start--footer- ---------->
           <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
  

</body>

</html>