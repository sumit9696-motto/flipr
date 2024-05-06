<?php  include ("../conn.php" )  ?>

<?php
$id=$_GET['id'];
$edit_query="SELECT * FROM item WHERE id='$id'";
$edit_query_run=mysqli_query($conn,$edit_query);

if(mysqli_num_rows($edit_query_run)>0){

    while($edit_row=mysqli_fetch_array($edit_query_run)){

        

         ?>

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

      <br>


      <div class="row">

        <div class="col-sm-2"></div>
        <div class="col-sm-8">

          <form method="post"  enctype="multipart/form-data" action="updateitem.php">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="itemname" class="form-control" name="itemname"  required value="<?php echo $edit_row['itemname'];?>" />
                  <label class="form-label" for="itemname">Iteam name</label>
                </div>
                <input type="hidden" name="id" value="<?php  echo $edit_row['id']; ?>"; />
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="file" id="itempic" class="form-control"  name="file" value="<?php echo $edit_row['itempic'];?>" />
                  <img src="img/<?php echo $edit_row[2] ?>" height="70px" width="100px" class="  clogo ">
                  <label class="form-label" for="itempic">iteam pic</label>
                </div>
              </div>
            </div>
          
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form6Example3" class="form-control"  required name="price" value="<?php echo $edit_row['price'];?>" >
              <label class="form-label" for="form6Example3">price </label>
            </div>
          
            <!-- Text input -->
            <div class="form-outline mb-4">
              <input type="text" id="form6Example4" class="form-control" name="dicprice" required value="<?php echo $edit_row['disprice'];?>" />
              <label class="form-label" for="form6Example4">Dis price</label>
            </div>
          
            <!-- category input -->
            <div class="form-outline mb-4">
            <select class="form-control" name="category">
                    <option value="mobile" >mobile</option>
                    <option value="mobile cover" >mobile cover</option>
                    <option value="mobilecharger" >mobile charger</option>
                  </select>
              <label class="form-label" for="form6Example5">category</label>
            </div>
          
           
          
            <!-- Message input -->
            <div class="form-outline mb-4">
              <input class="form-control" type="text" id="form6Example7" rows="4" value="<?php echo $edit_row['iteminfo'];?>"name="iteminfo" />
              <label class="form-label" for="form6Example7">Iteam information</label>
            </div>
          
            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="edit_btn">update item</button>
          </form>
          <?php
    }

}
else{

    echo" No data found ";
}


?>

<!--edit data code start-->

<?php 
if(isset($_POST['edit_btn'])){

  $id=$_POST['id'];
  $itemname=$_POST['itemname'];
  $price=$_POST['price'];
  $dicprice=$_POST['dicprice'];
  $category=$_POST['category'];
  $iteminfo=$_POST['iteminfo'];
  $date=date('Y-m-d');
  $file=$_FILES['file']['name'];

    $edit_query_main="UPDATE item SET itemname='$itemname',price='$price',disprice='$dicprice',category='$category', iteminfo='$iteminfo' 
    ,up_date='$date', itempic='$file' WHERE id='$id' "; 
    $query_run_main=mysqli_query($conn,$edit_query_main);

    if($query_run_main){
      {move_uploaded_file($_FILES['file']["tmp_name"], "img/".$_FILES['file']['name']);
        echo"<script>alert('Iteam Update successfuly ....');window.location.href='iteam.php'</script>";
    }
   

}}

?>
<!--edit data code end-->
        </div>
        <div class="col-sm-2"></div>
      </div>




             <!-----start--footer- ---------->
             <?php  include ("footer.php" )  ?>
             <!-------  end footer----------->
      


</body>
</html>