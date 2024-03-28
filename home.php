<?php
    session_start();
    if(isset($_SESSION['username']) && ($_SESSION['username']!="")){
        $username = $_SESSION['username'];
    }
    if(isset($_SESSION['password']) && ($_SESSION['password']!="")){
        $password = $_SESSION['password'];
    }
    if($username!=""){
        $loginuser = "Xin chao: ".$username;
    } else {
        $loginuser = 'Loi';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <?=$loginuser?>
    <h1>home </h1>
    <a href="logout.php">Logout</a>
</body>
</html>