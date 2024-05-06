

<?php  include ("../conn.php" )  ?>
<?php   
if(isset($_POST['add'])){

  $itemname=$_POST['itemname'];
  $price=$_POST['price'];
  $dicprice=$_POST['dicprice'];
  $category=$_POST['category'];
  $iteminfo=$_POST['iteminfo'];
  $date=date('Y-m-d');
  $file=$_FILES['file']['name'];

  

  $query="INSERT INTO item(itemname,itempic,price,disprice,category,iteminfo,cdate) VALUES
   ('$itemname','$file',' $price','$dicprice','$category',' $iteminfo','$date')";
  $query_run=mysqli_query($conn,$query);

  if($query_run)
  {move_uploaded_file($_FILES['file']["tmp_name"], "img/".$_FILES['file']['name']);
    echo"<script>alert('Iteam add successfuly ....');window.location.href='iteam.php'</script>";
    
    // header("Location: signin.php");
  }
  else{
    echo"not  insert valu";
  }
}
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

          <div class="row">

            <div class="col-sm-2"></div>
            <div class="col-sm-8">
              <h1 class="text-center">Add Iteam</h1>

              <form method="post" enctype="multipart/form-data" action="additem.php">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example1" class="form-control" name="itemname" required/>
                      <label class="form-label" for="form6Example1">Iteam name</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="file" id="form6Example2" class="form-control" name="file" required/>
                      <label class="form-label" for="form6Example2">iteam pic</label>
                    </div>
                  </div>
                </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form6Example3" class="form-control" name="price" required />
                  <label class="form-label" for="form6Example3">price </label>
                </div>
              
                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input type="text" id="form6Example4" class="form-control" name="dicprice" required />
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
                  <textarea class="form-control" id="form6Example7" rows="4" name="iteminfo" required></textarea>
                  <label class="form-label" for="form6Example7">Iteam information</label>
                </div>
              
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="add" >add item</button>
              </form>
            </div>
            <div class="col-sm-2"></div>
          </div>




           <!-----start--footer- ---------->
           <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
  

</body>

</html>