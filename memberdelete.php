<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url=member.php">
    <title>Document</title>
</head>
<body>
    <p align=center>
        <?php
        $re_id = $_GET['re_id'];
        $link = mysqli_connect('localhost','root','','account');
        $sql="delete from user where id = '$re_id'";
        if(mysqli_query($link,$sql))
        {
            echo "刪除完成";
        }
        else
        {
            echo "刪除失敗";
        }
        ?>
    </p>

</body>
</html>