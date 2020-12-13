<?php
     include 'conn.php';
    if(isset($_POST['done']))
    {
       $username=$_POST['username'];
       $password=$_POST['password'];
       $q= "INSERT INTO `login`(`username`, `password`) VALUES ('$username','$password')";

       $query=mysqli_query($con,$q);
         header('location:display.php');

    }

?>



<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <!--------------------------------------External CSS---------------------------------------------------->
    <link rel="stylesheet" type="text/css" href="CSS/LoginStyle.css">
</head>

<body>
    <div class="main">
        <h1>Welcome To Login Page</h1>
        <img src="Assets/Users-Login-icon.png" width="200px" height="200px">
        <form method="post">
            <div>
                <label>Username:</label>
                <input class="label1" id="user" type="text" name="username"><br><br>
            </div>
            <div>
                <label>Password:</label>
                <input class="label1" id="pass" type="password" name="password"><br><br>
            </div>
            <button class="sign" type="submit" value="submit" name="done">Login</button><br><br>

            <label>Don't have an account?<a href="Sign%20up%20page.html">Signup</a></label>
        </form>
    </div>
    
    
</body></html>
