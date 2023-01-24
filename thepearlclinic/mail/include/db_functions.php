<?php

$con = mysqli_connect('localhost', 'root', '', 'thepearlclinic');

function insert($con)
    {
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPhone = $_POST['userPhone'];
        $Message = $_POST['Message'];

        $sql = "insert into contact_form (userName , userEmail , userPhone , Message) values ('$userName ' , '$userEmail' , '$userPhone' , '$Message')";        
        return mysqli_query($con , $sql);
    }
?>
