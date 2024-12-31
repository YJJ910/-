<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="3; url=show_reservations.php">
    <title>Document</title>
</head>
<body>
    <p align=center>
        <?php
        $type = $_POST['type'];
        $date = $_POST['date'];
        $classroom = $_POST['classroom'];
        $time = $_POST['time'];
        $link = mysqli_connect('localhost','root','','reservation');
        $sql="insert into reserve (type,date,classroom,time) values ('$type','$date','$classroom','$time')";
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