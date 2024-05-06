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

              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example1" class="form-control" required />
                      <label class="form-label" for="form6Example1">Iteam name</label>
                    </div>
                  </div>
                 
              
               
              
               
              
               
              
               
              
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  
                </div>
              
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Update Category</button>
              </form>
            </div>
            <div class="col-sm-2"></div>
          </div>




           <!-----start--footer- ---------->
           <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
  

</body>

</html>