<?php session_start(); include ("conn.php" )  ?>
<?php   

session_unset();
session_destroy();
echo  "<script>alert('logout successfuly ....');window.location.href='signin.php'</script>";
?>