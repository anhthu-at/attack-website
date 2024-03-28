<?php

require 'connect.php';
// 
session_start();

if(isset($_POST['btn-login']) && $_POST["fullname"] != '' && $_POST["password"] != ''){
    $username = $_POST['fullname'];
    $password = $_POST['password'];
    $hashpassword = md5($password);

    $sql = "SELECT * FROM users WHERE  fullname='$username' AND password='$hashpassword'";
    $result = $conn->query($sql);

    $sqltable = "SELECT * FROM users";
   
    $results = $conn->query($sqltable);

    if ($result->num_rows > 0) {
    // output data of each row
         while($row = $result->fetch_assoc()) {
            echo "<pre>";
            echo "id: " . $row["id"]. " - Name: " . $row["fullname"]. " " . $row["password"]. "<br>";
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;

            // header('Location: home.php');

            if($results = $conn->query($sqltable)) {
                while ($rows = $results->fetch_array()){
                    echo "<pre>";
                    echo $rows["id"] ;
                    echo "<pre>";
                    print_r ($rows);
                }
            }
        }
    } else {
            echo "<pre>";
            echo "0 results";
    }
}


// a' or '1'='1 
// co the thay a thanh bb hay abc de test

?>