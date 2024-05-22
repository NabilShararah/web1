<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css" <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_action.php" method="post" align="center">
        <img class="kit" src="images/KitCrates.jpg"><br>
        <input type="text" class="text" name="username" placeholder="Username"  required><br>
        <input  type="password"  class="text"name="password" placeholder="Password"  required><br>
        <button type="submit" class="text" style="background-color: wheat; color: black; " >Login</button><br>
        <button class="text" style="background-color: wheat ; color: black;"> <a href="signup.php" >Signup</a></button>
    </form>
</body>
</html>
