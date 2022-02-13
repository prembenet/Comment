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
    <title>Comment - Forgot Password</title>
    <link rel="stylesheet" href="Assets/Css/form.css">
</head>
<body>
    <form action="Assets/Php/forgot.php" method="post">
        <fieldset>
            <legend>Forgot Password</legend>
            <label for="email">Email</label>
            <br>
            <input type="text" name="mail" id="email" placeholder="Enter your mail ID" title="Eg: sample@example.com">
            <br>
            <label for="secret">Secret</label>
            <br>
            <input type="text" name="code" id="secret" placeholder="Enter your secret code" title="Eg: ">
            <br>
            <input type="submit" value="Sign In">
            <br>
            <?php if(isset($_GET['Password'])): ?>
                <p style="font-size: x-large;margin: 0">Your Password is : <b><i><?= $_GET['Password'] ?></i></b></p>
            <?php endif ?>
        </fieldset>
    </form>
</body>
</html>