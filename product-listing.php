<?php

require 'db_amaz.php';
require 'include/session_check.php';
require 'include/header.php';
?>
<div class="container">
 <a class="btn btn-primary" href="product-add.php">Add Product</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Operations</th>
     
    </tr>
  </thead>
  <tbody>
  <?php

$sql="select * from products";
$result=  mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['id'];  
      $name=$row['name'];
      $category=$row['category'];
      $quantity=$row['quantity'];
      $price=$row['price'];
      $created_at=$row['created_at'];
      $updated_at=$row['updated_at'];
  
      ?>
        <tr>
          <th><?php echo $id; ?></th>
          <th><?php echo $name; ?></th>
          <td><?php echo $category; ?></td>
          <td><?php echo $quantity; ?></td>
          <td><?php echo $price; ?></td>
          <td><?php echo $created_at; ?></td>
          <td><?php echo $updated_at; ?></td>
                    
          <td>
            <button class="btn btn-danger" type="button" onclick="confirmDelete('delete_user.php?deleteid=<?php echo $id ?>')">
              Delete
            </button>
            <button class="btn btn-primary" type="button" onclick="confirmUpdate('product-update.php?updateid=<?php echo $id ?>')">
              Update
            </button>
            
          </td>
        </tr>
    <?php
    }

}

?>


  </tbody>
</table>
<script>

  function confirmDelete(url) {
    if(window.confirm("Are you sure want to delete?")) {
    window.location.href = url
    }
  }
  function confirmUpdate(url) {
    if(window.confirm("Are you sure want to update?")) {
    window.location.href = url
    }
  }

</script>
</body>
</html>