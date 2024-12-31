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
        $id = $_POST['id'];
        $level = $_POST['level'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $link = mysqli_connect('localhost','root','','account');
        $sql="insert into user (id,level,name,password) values ('$id','$level','$name','$password')";
        if(mysqli_query($link,$sql))
        {
            echo "新增完成";
        }
        else
        {
            echo "新增失敗";
        }
        ?>
    </p>
</body>
</html>