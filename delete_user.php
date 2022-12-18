<?php

require 'include/session_check.php';
require 'db_amaz.php';

?>



<?Php
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

      $sql="delete from products where id=$id";
      $result = mysqli_query($con , $sql);
    
    if($result){
        echo "deleted successfully";
        header('location:product-listing.php');
    
    }else{
        echo "Error:". $sql . "<br>". $conn->error;   

    }
}


?>