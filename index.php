<?php
    include_once('Assets/Php/config.php');
    if(isset($_SESSION['Mail']))
        header('Location: comment.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment - Sign In</title>
    <link rel="stylesheet" href="Assets/Css/form.css">
</head>
<body>
    <form action="Assets/Php/signin.php" method="post">
        <fieldset style="margin-top: 10%">
            <legend>Sign In</legend>
            <p style="font-size: larger">Don't have an account ? <a href="signup.php">Sign Up</a></p>
            <label for="email">Email</label>
            <br>
            <input type="text" name="mail" id="email" placeholder="Enter your mail ID" title="Eg: sample@example.com">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <br>
            <a href="forgot.php" style="font-size: larger">Forgot your password ?</a>
            <br>
            <input type="submit" value="Sign In">
        </fieldset>
    </form>
</body>
</html>