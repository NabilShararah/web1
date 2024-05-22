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
        <li><a href="index.php">Home</a></li>
        <li><a href="Crates.php">Crates</a></li>
        <li><a href="Size.php">Sizes</a></li>
        <li class="active"><a href="about.php">About Us</a></li>
        <li><a href="logout.php">Logout </a></li>
    </ul>

    <div class="Header">
        <h2>Free delivery for orders above 50$</h2>
    </div>


    <div class="col-2 col-s-2">
        <div class="aside">
            <img class="kit" src="images/KitCrates.jpg">
        </div>
    </div>
    <table>

        <tr>
            <td class="asidecr">
                <img class="kit" src="images/ball.jpg" align="right" width="100px"><br><br>
                <p class="Mystery">Mystery Trio Crate</p>
                <p class="text"> At KitCrates Lb, our goal is simple yet profound: to bring the excitement of football
                    into the hands of fans through our innovative mystery kits boxes. We are passionate about enhancing
                    your football experience by curating and delivering premium-quality, limited-edition kits and
                    collectibles right to your doorstep. Our mission is to ignite the thrill of anticipation, providing
                    football enthusiasts with a unique and enjoyable way to connect with their favorite sport. Whether
                    you're a seasoned collector or a devoted fan, our aim is to make every unboxing a moment of pure
                    joy, as we share our passion for football with you.</p>

            </td>

        </tr>

    </table>
    <p class="Mystery">Elevating Your Mystery Kits Experience</p>
    <table>
        <tr>
            <td colspan="2">
                <p class="text">
                    We take pride in providing exceptional service, swift delivery, and premium-quality mystery kits
                    boxes. Our commitment to customer satisfaction is unwavering, ensuring that you have a seamless
                    shopping experience from start to finish. We lead the way in introducing and popularizing this
                    exciting concept of mystery kits in Lebanon</p>
            </td>
            
        </tr>
    </table>

</body>

</html>