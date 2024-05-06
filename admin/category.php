<?php  include ("../conn.php" )  ?>

<?php

$cat="SELECT * FROM category";
$cat_run=mysqli_query($conn,$cat);
if(mysqli_num_rows($cat_run)>0 )
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
          <table >
            <tr>
                <th style="padding: 15px;">id</th>
                <th style="padding: 15px;">Category name</th>
               
                
                <th style="padding: 15px;">edit</th>
                <th style="padding: 15px;">delete</th>
            </tr><?php
            while($cat_row = mysqli_fetch_array($cat_run))
{
 ?>
            <tr>
                <td><?php echo $cat_row['id'];?></td>
                <td><?php echo $cat_row['cname'];?></td>
               
                <td><button class="btn btn-dark"><a href="updatecadegory.html" style="text-decoration: none;"class= "text-light";>Edit</a></button></td>
                <form action ="category.php"; method="post":>
                    <input type="hidden" id="form6Example3" class="form-control" name="delete_id" value="<?php echo $cat_row['id'];?>" />
                    <td><button class="btn btn-dark" type="sumbit" name="delete_btn">delete</button></td>
</form></td>
            </tr>

            <?php   
}  ?>
          </table>
          <?php    }
          else{
            echo "not record found";
          }
          ?>
<!--delete code start-->

<?php 
if(isset($_POST['delete_btn'])){
  $delete=$_POST['delete_id'];
  $delete_query="DELETE FROM category WHERE id ='$delete'";
  $delete_query_run=mysqli_query($conn,$delete_query);
  if($delete_query_run){
    echo "delete succesfull";
  }
  else{
    echo "not delete succesfull";
  }
}

?>


           <!-----start--footer- ---------->
           <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
  

</body>

</html>