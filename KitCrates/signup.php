<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <h2>Sign Up</h2>
    <form action="signup_action.php" method="post" align="center">
        <img class="kit" src="images/KitCrates.jpg"><br>
        <input type="text" class="text" name="username" placeholder="Username" required><br>
        <input type="email" class="text" name="email" placeholder="Email" required><br>
        <input type="password" class="text" name="password" placeholder="Password" required><br>
        <button type="submit" class="text" style="background-color: wheat; color: black; ">Sign Up</button><br>
       <button class="text" style="background-color: wheat; color: black; "> <a href="login.php" >BACK</a></button>
    </form>
</body>
</html>
