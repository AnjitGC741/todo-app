<?php   
    $conn=new mysqli("localhost","root","","todoDb");
    if($conn->connect_error) {
        die($conn->connect_error);
    }
 
?>