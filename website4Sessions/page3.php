<?php
 session_start();
 print_r($_SESSION);
 $name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";
 $email = isset($_SESSION['email']) ? $_SESSION['email'] : "No email address";
?>


<!DOCTYPE html>
<html>
 <head><title>Php sessions</title></head>
 <body>
<h5>Hello <?php echo $name; ?></h5>
 </body>
</html> 