<?php

require 'include/session_check.php';
require 'db_amaz.php';

?>

<?php      
    
    $id1 = $_POST['id'];
    $pwd1 = $_POST['pwd'];
        
      
      
        $sql = "select * from loginn where id = '$id1' and pwd= '$pwd1'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            header('location:product-listing.php');  
        }
        else
        {  
            echo "<h4><center> Login failed.</center></h4>";  
        }     
?>
  