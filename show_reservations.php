<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>預約記錄展示</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
            background-color: #f9f9f9; /* 淺灰背景 */
        }
        .table-container {
            background-color: #f4f4f4; /* 白色底 */
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 邊框陰影 */
            width: 80%;
            max-width: 800px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        h1 {
            margin-bottom: 20px;
        }
        body {
            background-image: url('12.jpg');
            background-size: cover;
            background-repeat: no-repeat; 
            background-position: center; 
            background-color: rgba(255, 255, 255, 0.5);
            height: 100vh;
        }
        .add-link {
            position: absolute;
            top: 20px;
            right: 20px;
            text-decoration: none;
            color: #fff;
            background-color: rgba(83, 83, 83, 0.5);
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
        }
        .add-link:hover {
            background-color: rgba(255, 255, 255, 0.5);;
        }
        .right-link {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            color: #fff;
            background-color: rgba(83, 83, 83, 0.5);
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <a href="login.php" class="right-link">登出</a>
    <a href="index.htm" class="add-link">新增</a>
    <h1>教室預約記錄</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>預約類型</th>
                    <th>時段</th>
                    <th>日期</th>
                    <th>場地</th>
                    <th>刪除</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $link = mysqli_connect('localhost', 'root', '', 'reservation');


                if (!$link) {
                    die("資料庫連接失敗：" . mysqli_connect_error());
                }


                $sql = "SELECT * FROM reserve";
                $result = mysqli_query($link, $sql);


                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['type']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['time']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['date']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['classroom']) . "</td>";
                        echo "<td><button onclick=\"window.location.href='delete.php?met=delete&re_id=",$row['id'],"'\">刪除</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>目前沒有預約記錄</td></tr>";
                }


                mysqli_close($link);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
