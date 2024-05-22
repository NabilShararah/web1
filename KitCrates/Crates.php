<?php
session_start();
if(!isset($_SESSION['username']))
    header("location:login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul class="menu">
        <li><a href="search.php">Search Kits</a></li>
        <li ><a href="index.php" >Home</a></li>
        <li class="active"><a href="Crates.php" >Crates</a></li>
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
    <table>
        <tr>
            <td class="asidecr">
                <img class="kit" src="images/Solo.jpg" align="right" ><br><br>
                <p class="Mystery">Mystery Solo Crate</p>
                <p class="text">Kick off your football memorabilia collection journey with our Mystery Solo Kit Crate! Each box features a hand-picked premium football kit item, adding an exciting twist to your passion for the game. Start collecting today and elevate your football experience! Includes 1 random premium quality retro or non-retro kit.</p>
                <h1>Price: 26.99$</h1>
            </td>
    
        </tr>
        <tr>
            <td class="asidecr">
                <img class="kit"  src="images/Trio.jpg" align="right" width="100px"><br><br>
                <p class="Mystery">Mystery Trio Crate</p>
                <p class="text">Dive into the excitement with our Mystery Trio Kit Crate! Unbox three incredible kits in one unforgettable experience. Perfect for enthusiasts and adventurers, this crate promises hours of discovery. Triple the excitement and order now! Includes 3 random premium quality retro or non-retro kits. Guarantees you 1 nation and 2 clubs kits.</p>
                <h1>Price: 60.99$</h1>
            </td>
    
        </tr>
        
       </table>
    
</body>
</html>