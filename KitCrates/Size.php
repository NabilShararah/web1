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
   
    <ul class="menu">
        <li><a href="search.php">Search Kits</a></li>
        <li ><a href="index.php" >Home</a></li>
        <li><a href="Crates.php" >Crates</a></li>
        <li class="active"><a href="Size.php" >Sizes</a></li>
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
   <table class="Size" BORDERCOLOR="Gold" >
    <tr>
        <td class="sizetd">Size</td>
        <td class="sizetd">Length(cm)</td>
        <td class="sizetd">Width (cm)</td>
        <td class="sizetd">Height(cm)</td>
        <td class="sizetd">Wright(kg)</td>
    </tr>
    <tr>
        <td class="sizetd">S</td>
        <td class="sizetd">69-71</td>
        <td class="sizetd">53-55</td>
        <td class="sizetd">162-170</td>
        <td class="sizetd">45-60</td>
    </tr>
    <tr>
        <td class="sizetd">M</td>
        <td class="sizetd">71-73</td>
        <td class="sizetd">55-57</td>
        <td class="sizetd">170-176</td>
        <td class="sizetd">60-75</td>
    </tr>
    <tr>
        <td class="sizetd">L</td>
        <td class="sizetd">73-75</td>
        <td class="sizetd">57-58</td>
        <td class="sizetd">176-182</td>
        <td class="sizetd">75-83</td>
    </tr>
    <tr>
        <td class="sizetd">XL</td>
        <td class="sizetd">75-78</td>
        <td class="sizetd">58-60</td>
        <td class="sizetd">182-190</td>
        <td class="sizetd">83-90</td>
    </tr>
    <tr>
        <td class="sizetd">XXL</td>
        <td class="sizetd">78-81</td>
        <td class="sizetd">60-62</td>
        <td class="sizetd">190-195</td>
        <td class="sizetd">90-100</td>
    </tr>

    
    
   </table>
   <h1 class="Scmnt">SIZES MAY VARY BETWEEN RETRO ,CLUB AND NATION KITS </h1>


    
        
    
    

    
</body>
</html>