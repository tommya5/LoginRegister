<?php
    $con=mysqli_connect("localhost","id1043074_usersbioadvisor","piccolapuzzoletta5","id1043074_usersbioadvisor");
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $statement = mysqli_prepare($con, "INSERT INTO User (name, email, username, password) VALUES (String, String, String, String)");
    mysqli_stmt_bind_param($statement, "siss", $name, $email, $username, $password);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_close($statement);
    
    mysqli_close($con);
?>
