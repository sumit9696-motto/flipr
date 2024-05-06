
<?php  include ("../conn.php" )  ?>
<?php   
if(isset($_POST['sub'])){

  $category=$_POST['category'];



  $query="INSERT INTO category(cname) VALUES ('$category')";
  $query_run=mysqli_query($conn,$query);

  if($query_run)
  {
    echo  "<script>alert('category add successfuly ....');window.location.href='category.php'</script>";
    
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

      
<?php  include ("menu.php" )  ?>

          <br>
          <br>
          <br>

          <div class="row">

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
<h1 class="text-center">Add Category</h1>
              <form method="post" action="addcategory.php">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example1" class="form-control" name="category"  required />
                      <label class="form-label" for="form6Example1">category name</label>
                    </div>
                  </div>
                 
              
               
              
               
              
               
              
               
              
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="sub">Add Category</button>
              </form>
            </div>
            <div class="col-sm-3"></div>
          </div>




     
          <?php  include ("footer.php" )  ?>

</body>

</html>