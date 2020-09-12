
<?php
    require_once("include/ConnectingDB.php");
    if(isset($_POST["Sub"]))
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="include/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS Login</title>
</head>
<body>
    <div>
    <h1 class="heading">Ritz Human Resource Management System</h1>
    <form action="" method="post" class="box">
        <h2>Login</h2>
        <input type="text" name="name" id="" placeholder="Username">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" value="Login" name="Submit"> 
    </form>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <div class="footer">
        <p>&copy; RitzTechnologies 2020</p>
    </div>
</body>
</html>