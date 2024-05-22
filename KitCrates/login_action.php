<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "kitcrates");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE db_username='$username' AND db_password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid username or password. Username: $username, Password: $password";
    }
}


?>
