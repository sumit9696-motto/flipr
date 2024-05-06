<?php  include ("../conn.php" )  ?>

<?php

$user="SELECT * FROM user";
$user_run=mysqli_query($conn,$user);
if(mysqli_num_rows($user_run)>0 )
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
          <table style="" class="text-center p">
            <tr>
                <th style="padding: 25px;">id</th>
                <th style="padding: 25px;">name</th>
                <th style="padding: 25px;">email</th>
                <th style="padding:25px;">phone</th>
                <th style="padding: 25px;">address</th>
                <th style="padding: 25px;">pin</th>
                <th style="padding: 25px;">edit</th>
                <th style="padding: 25px;">delete</th>
            </tr>
            <tr><?php
            while($user_row = mysqli_fetch_array($user_run))
{
 ?>
                <td><?php echo $user_row['id'];?></td>
                <td><?php echo $user_row['fname'];?></td>
                <td><?php echo $user_row['email'];?></td>
                <td><?php echo $user_row['phone'];?></td>
                <td><?php echo $user_row['address'];?></td>
                <td><?php echo $user_row['pin'];?></td>
                <td><button class="btn btn-dark">Edit</button></td>



                            <form action ="userdetails.php"; method="post":>
                    <input type="hidden" id="form6Example3" class="form-control" name="delete_id" value="<?php echo $user_row['id'];?>" required/>
                    <td><button class="btn btn-dark" type="sumbit" name="delete_btn">delete</button></td>
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
          </div>
          <?php 
if(isset($_POST['delete_btn'])){
  $delete=$_POST['delete_id'];
  $delete_query="DELETE FROM user WHERE id ='$delete'";
  $delete_query_run=mysqli_query($conn,$delete_query);
  if($delete_query_run){
    echo "delete succesfull";
  }
  else{
    echo "not delete succesfull";
  }
}

?>
              <div class="col-sm-2"></div>
 </div>
           <!-----start--footer- ---------->
           <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
  

</body>

</html>