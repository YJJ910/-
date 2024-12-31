<?php
session_start();
$name = $_POST["name"];
$password = $_POST["password"];
$link = mysqli_connect('localhost', 'root', '', 'account');

// 檢查資料庫連線
if (!$link) {
    die("資料庫連線失敗：" . mysqli_connect_error());
}

$sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";
$result = mysqli_query($link, $sql);

if ($record = mysqli_fetch_assoc($result)) {
    $_SESSION['user'] = $record['name'];
    $_SESSION['level'] = $record['level'];
    
    if($_SESSION['level'] =="teacher"){
        echo "<script>
            alert('登入成功');
            window.location.href = 'show_reservations.php';
        </script>";
    }
    elseif($_SESSION['level']=="admin"){
        echo "<script>
            alert('管理員登入成功');
            window.location.href = 'member.php';
        </script>";
    }
} else {

    echo "<script>
        alert('登入失敗');
        window.location.href = 'login.php';
    </script>";
}

// 關閉資料庫連線
mysqli_close($link);
?>

