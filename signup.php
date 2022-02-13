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
    <title>Comment - Sign Up</title>
    <link rel="stylesheet" href="Assets/Css/form.css">
</head>
<body>
    <form action="Assets/Php/signup.php" method="post">
        <fieldset style="margin-top: 10%;">
            <legend>Sign Up</legend>
            <p style="font-size: larger">Already have an account ? <a href="index.php">Sign In</a></p>
            <label for="email">Email</label>
            <br>
            <input type="text" name="mail" id="email" placeholder="Enter a mail ID" title="Eg: sample@example.com">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="password" placeholder="Enter a password">
            <br>
            <label for="secret">Secret</label>
            <br>
            <input type="text" name="code" id="secret" placeholder="Enter a secret code" title="Eg: ">
            <br>
            <input type="submit" value="Sign Up">
            <p>By clicking the "Sign Up" button you are creating an <br> account, and you agree to the Terms of Use.</p>
        </fieldset>
    </form>
</body>
</html>