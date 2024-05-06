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
                <th style="padding: 15px;">username</th>
                <th style="padding: 15px;">email</th>
                <th style="padding:15px;">phone</th>
                <th style="padding: 15px;">address</th>
                <th style="padding: 15px;">order name</th>
                <th style="padding: 15px;">edit</th>
                <th style="padding: 15px;">delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td>sumit kumar rai</td>
                <td>sumit@766gmail.com</td>
                <td>1233333333</td>
                <td>cbjebedjb jcbewjcbj jdwbxwj</td>
                <td> iphone </td>
                <td><button class="btn btn-dark">Modify Order</button></td>
                <td><button class="btn btn-dark">Cancel Order</button></td>
            </tr>
          </table>




           <!-----start--footer- ---------->
           <?php  include ("footer.php" )  ?>
         <!-------  end footer----------->
  

</body>

</html>