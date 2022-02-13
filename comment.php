<?php
    include_once('Assets/Php/read.php');
    if(!isset($_SESSION['Mail']))
        header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment - Comment</title>
    <link rel="stylesheet" href="Assets/Css/comment.css">
</head>
<body>
    <form action="Assets/Php/comment.php" method="post">
        <p>What would you like to share with world ?</p>
        <textarea name="comment" placeholder="Enter your comments..." title="Enter your comments" cols="208" rows="20"></textarea>
        <input type="submit" value="Submit">
    </form>
    <hr>
    <div>
        <h1>Comment</h1>
        <button onclick="Filter('<?= $_SESSION['Mail'] ?>')">Filter</button>
        <div>
            <?php foreach($_Sql as $_Comment): ?>
                <div class="comment">
                    <span class="ID"><?= $_Comment['Mail'] ?></span>
                    <span><?= $_Comment['Comment'] ?></span>
                    <span class="time"><?= $_Comment['Time'] ?></span>
                </div>
                <?php endforeach ?>
        </div>
    </div>
    <script>
        function Filter(ID){
            var comments = document.getElementsByClassName('comment')
            for(var i = 0;i<comments.length;i++){
                if(ID != comments[i].children[0].innerText){
                    comments[i].children[0].style.display = "none";
                    comments[i].children[1].style.display = "none";
                    comments[i].children[2].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>