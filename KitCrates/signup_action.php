<?php

$con = mysqli_connect("localhost", "root", "", "kitcrates");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    
    $sql = "INSERT INTO users (db_username, db_Email, db_password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($con, $sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}


?>
