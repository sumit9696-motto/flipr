<!DOCTYPE html>
<html>
<?php session_start(); include "header.php"   ?>
<body>
<?php  include "menu.php"   ?>

  

    

    <!---------- start page------------->

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <div class="container bg-light">
             <form >
              <h1 class="text-center"  >Contactus</h1>


                    <div class="row">
                      
                      <div class="col-md-3 mb-4 pb-2"></div>
                      <div class="col-md-6 mb-4 pb-2" >
      
                        <div class="form-outline">
                          <input type="text" id="name" class="form-control form-control-lg"  required/>
                          <label class="form-label" for="text">Name</label>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 pb-2"></div>
                      <br>
                      <br>


                      <div class="col-md-3 mb-4 pb-2"></div>
                      <div class="col-md-6 mb-4 pb-2" >
                        <div class="form-outline">
                          <input type="email" id="email" class="form-control form-control-lg"  required/>
                          <label class="form-label" for="email">Email</label>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 pb-2" ></div>
                      <br>
                      <br>

                      
                      <div class="col-md-3 mb-2 pb-2" ></div>
                      <div class="col-md-6 mb-4 pb-2" >
                        <div class="form-outline">
                          <input type="number" id="phoneNumber" class="form-control form-control-lg"  required/>
                          <label class="form-label" for="phoneNumber">Phone Number</label>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 pb-2" ></div>
                      <br>
                      <br>


                      
                           <div class="col-md-3 mb-2 pb-2" ></div>
                      <div class="col-md-6 mb-4 pb-2" >
                        <div class="form-outline">
                          <input type="textarea" id="message" class="form-control form-control-lg" required/>
                          <label class="form-label" for="textarea">Message</label>
                        </div>
                      </div>
                      <div class="col-md-3 mb-4 pb-2" ></div>
                      <br>
                      <br>

                      
                      <div class="col-md-5"></div>
                      <div class="col-md-2">
                      <button class="btn btn-primary btn-lg px-5" type="submit">submit</button>
                      </div>
                      <div class="col-md-5"></div>
                      <br>
                      <br>
                      <br>
                      
            
                    </div>

                       
           
             </form>
    </div>
  </div>
  <div class="col-sm-2"></div>
</div>

<!-------------end page-->

<br>
<br>
<br>



<?php  include "footer.php"   ?>

</body>


</html>