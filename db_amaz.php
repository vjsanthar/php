<?php

$con = mysqli_connect('localhost', 'root', '', 'amaz');

function insert($con, $product_data)
{
    $name = $product_data['name']; 
    $category = $product_data['category'];
    $quantity = $product_data['quantity'];
    $price = $product_data['price'];
    $created_at = $product_data['created_at'];
    
    $sql = "insert into `products` (name, category, quantity, price,  created_at) values ('$name', '$category', '$quantity', '$price', '$created_at')";
    return mysqli_query($con , $sql);
}
   
function getEMP($con) {
    return mysqli_query($con, 'select * from user');
}
function getproductData($con, $id) {
    $sql = 'select * from `products` where id = ' . $id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}
function getadmin_name($con, $id) {
    $sql = 'select * from `loginn` where id = ' . $id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row;
}

?>