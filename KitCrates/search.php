<?php
session_start();
if(!isset($_SESSION['username']))
    header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul class="menu">
        <li class="active"><a href="search.php" >Search Kits</a></li>
        <li ><a href="index.php" >Home</a></li>
        <li><a href="Crates.php" >Crates</a></li>
        <li><a href="Size.php" >Sizes</a></li>
        <li ><a href="about.php" >About Us</a></li>
        <li><a href="logout.php">Logout </a></li>
    </ul>

    <div class="Header">
        <h2>Free delivery for orders above 50$</h2>
    </div>
    

    <div class="col-2 col-s-2">
        <div class="aside">
        <img class="kit" src="images/KitCrates.jpg"  >
        
        </div>
    </div>
    <div class="searchdiv">
        <input class="searchholder" type="text" id="searchInput" placeholder="Search for Kits...">
        <button class="searchbtn" onclick="search()">Search</button>
    </div>
   

    <div class="col-2 col-s-2">
        <div class="aside">
            <img class="searchimg" id="image" src="images/ball.jpg" alt="Search Result Image">
            
        </div>
    </div>

    

</body>
</html>