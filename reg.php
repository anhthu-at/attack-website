<?php
require 'connect.php';

if(isset($_POST['btn-reg'])){
    
    $username = $_POST['fullname'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)) {
        // insert data
        echo "<pre>";
        print_r($_POST);

        $sql = "INSERT INTO `users` (`fullname`, `password`) VALUES ('$username', md5('$password')) ";
        
        if($conn->query($sql)===TRUE) {
            echo "Save data";
        } else {
            echo "Error {$sql}" .$conn->error;
        }
    
    }
    else {
        echo "Error";
    }
    
}


?>