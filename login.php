<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sample.css">
    <title>輔大教室預借系統</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #0007ff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin: 0;
        }
        h2 {
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgb(0, 0, 0);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 48%;
        }
        button:hover {
            background-color: #e5e5e5;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        body{
            background-image:url('12.jpg');
            background-size: cover;
            background-repeat: no-repeat; 
            background-position: center; 
            background-color: rgba(255, 255, 255, 0.5);
            height: 100vh;
        }
    </style>
<body>
<form method="post" action="logincheck.php">
        <input type=hidden name="method" value="<? echo $method ?>">
        <center>
        <div class="container" >
        <h2>
            輔仁大學教室預借系統
        </h2>
                <h2 class="title">登入</h2><br>
                <table>
                    <tr>
                        <td>帳號：</td>
                        <td>
                            <input type=text name="name" value="" placeholder="請輸入帳號">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td>密碼：</td>
                        <td>
                            <input type=password name="password" value="" placeholder="請輸入密碼">
                        </td>
                    </tr>
                </table>
                <input type="submit">
            </div>
            </center>
        </form>

</body>
</html>
