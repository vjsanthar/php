<?php
require 'includes/db_func.php';
require 'includes/session_checkuser.php';

?>

<?php      
    $email = $_POST['amail'];
    $pwd = $_POST['pwd1'];
      
        
        $email = stripcslashes($email);  
        $pwd = stripcslashes($pwd);  
        $email = mysqli_real_escape_string($con, $email);  
        $pwd = mysqli_real_escape_string($con, $pwd);  
      
        $sql = "select * from userlogin where email = '$email' and pwd = '$pwd'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_email'] = $email;
            $_SESSION['role'] = 'user';
            header('location:userproduct_list.php');
        }
        else
        {  
            echo "<h4><center> Login failed. Invalid username or password.</center></h4>";  
        }     
?>  