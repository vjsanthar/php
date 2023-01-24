<?php
require 'include/db_functions.php';


$sql="select * from contact_form";
$result=  mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">userName</th>
      <th scope="col">userEmail</th>
      <th scope="col">userPhone</th>
      <th scope="col">Message</th>    
    </tr>
  </thead>
  <tbody>

    <?php
    if($result) {
      while($row=mysqli_fetch_assoc($result)){
        $userName=$row['userName'];  
        $userEmail=$row['userEmail'];
        $userPhone=$row['userPhone'];
        $Message=$row['Message'];

          
        
    ?>
        <tr>
          <th><?php echo $userName; ?></th>
          <th><?php echo $userEmail; ?></th>
          <td><?php echo $userPhone; ?></td>
          <td><?php echo $Message; ?></td>
        
        </tr>
 
</body>
</html>
