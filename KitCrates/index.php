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
    <title>Kit Crates LB</title>
</head>

<body>

<div class="col-1 col-s-1">
    <ul class="menu">
        <li><a href="search.html">Search Kits</a></li>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="Crates.php">Crates</a></li>
        <li><a href="Size.html">Sizes</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="logout.php">Logout </a></li>
    </ul>
    </div>
    
    <div class="Header">
        <h2>Free delivery for orders above 50$</h2>
    </div>


    <div class="col-2 col-s-2">
        <div class="aside">
            <img class="kit" src="images/KitCrates.jpg">
            <p class="text"> Lebanon's Pre-eminent Source for Mystery Kits - Your Destination for Football Surprises!
            </p>
        </div>
    </div>

    <h1 class="Scmnt">Hello Football Fans Welcome To Our Online Store Hope You'll Like Our Concept For Revealing Mystery Kits </h1>
    <br>

    <div class="col-2 col-s-2">
        <div class="aside">
            <video class="kit" width="320" height="240"  controls loop autoplay muted>
                <source src="images/video.mp4.mp4" type="video/mp4">
               
            </video>
        </div>
    </div><br><br>

    <p class="text"> Why Us?</p>
    <h1 class="Scmnt">OUR STORE GUARANTEES YOU </h1><br><br>

    <table class="WhyUs" BORDERCOLOR="Gold">
        <tr>
            <td class="Mystery"> An Exclusive Selection</td>
            <td class="Mystery">Premium Quality</td>
            <td class="Mystery">Local Excellence</td>
        </tr>
        <tr>
            <td class="text"> As the preeminent mystery kits shop in Lebanon, we curate a unique and diverse range of football surprises you won't find elsewhere. Explore a world of rare and coveted items right at your fingertips. </td>
            <td class="text">Our commitment to quality is unmatched. Every mystery kit we offer is carefully selected to ensure you receive only the finest products, adding immense value to your collection.</td>
            <td class="text">We take pride in being Lebanon's premier mystery kits destination, supporting our local football community, and bringing you the best of global football culture. </td>
        </tr>
    </table><br><br>

    <div class="col-2 col-s-2">
    <p class="Mystery">Our Concept</p>

    <p class="text">You have the choice of avoiding up to THREE of the following:</p>
     <ul class="con"> 
        <li class="avoid">A specific league</li>
        <li class="avoid">A specific club/nation</li>
        <li class="avoid">A specific color</li>
        <li class="avoid">With/Without a collar</li>
    </ul>
</div>
    <br><br>
   

    <h3 class="insta">You can find us on instagram @kitcrateslb to see more of our content and kits</h3>

    <br>

    <marquee behavior="" direction="">
        <table CELLSPACING="0" CELLPADDING="0">
            <tr>
                <td> <img src="images/KitCrates.jpg" width="200px" alt="Kit Crates Logo"></td>
                <td> <img src="images/Solo.jpg" width="200px" alt="Solo Crate Image"></td>
                <td> <img src="images/Trio.jpg" width="200px" alt="Trio Crate Image"></td>
                <td> <img src="images/Madrid.jpg" width="200px" alt="Real Madrid's Kit Image"></td>
                <td> <img src="images/milan2.jpg" width="200px" alt="AC Milan's Kit Image"></td>
                <td> <img src="images/United.jpg" width="200px" alt="Manchester United's Kit Image"></td>
            </tr>

        </table>
        <br><br>
    </marquee>

    <div class="footer">
        <h3>© 2024, KitCrates LB </h3>
        
    </div>








</body>

</html>