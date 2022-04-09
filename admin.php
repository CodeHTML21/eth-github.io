<?php session_start();
ini_set('display_errors', 'off');
error_reporting(0);
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('logpass.sqlite');
    }
}
$db = new MyDB();
$db->exec('CREATE TABLE login (bar STRING)');
$db->exec('CREATE TABLE password (bar STRING)');

$results = $db->query('SELECT bar FROM login');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0){
    $result = $db->query('SELECT bar FROM login');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $login = $row[0];
        $i++;
    }
    $result = $db->query('SELECT bar FROM password');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $password = $row[0];
        $i++;
    }}
else{
    echo 'Откройте logpass.php и введите данные для входа';
    echo '<html> <head> <meta http-equiv="Refresh" content="1; URL=logpass.php"> </head> <body> </body> </html>';
}
$salt = '89fe766db2985e1ecc1972c25517ddbf';
$name = md5(strip_tags($_POST['name']) . $salt);
$pass = md5(strip_tags($_POST['pass']) . $salt);
$_um_fl = '';
$info = 'Введите логин и пароль';
$admin = '';
$send = '';

if ($_POST['send']) {
    if (($name == $login) && ($pass == $password)) {
        $info = 'Все верно';
        $_SESSION['admin'] = 'Вы вошли!';
        echo '<html> <head> <meta http-equiv="Refresh" content="2; URL=admin/app/index.php"> </head> <body> </body> </html>';
    } else {
        $info = 'Что-то не верно';
        if ($_COOKIE['_um_fl'] == '') {
            $metka = '1';
            $info .= ' 2 попытки осталось';
        }
        if ($_COOKIE['_um_fl'] == '1') {
            $metka = '2';
            $info .= ' 1 попытка осталась';
        }
        if ($_COOKIE['_um_fl'] == '2') {
            echo '<meta charset="UTF-8"><style> .in { width: 158px; left: 50%; top: 50%; position: absolute; transform: translate(-50%,-50%); } </style> <div class="in">заблокировано</div>';
            exit;
        } else {
            setcookie("_um_fl", $metka, time() + 60000000);
        }
    }
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <style>
        .form {
            position: absolute;
            width: 350px;
            height: 250px;
            border: 1px solid #b8b5b5;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #ffffff;
            box-shadow: 0px 0px 3px 1px #b0b0b0;
        }

        form {
            margin-top: 21px;
        }

        div.in {
            display: block;
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #c9d0d5;
            width: 258px;
            margin: auto;
            margin-top: 19px;
        }

        input[type="text"], input[type="password"] {
            margin-left: 10%;
            margin-top: 17px;
            width: 80%;
        }

        button {
            width: 82%;
            margin-left: 10%;
            margin-top: 19px;
        }

        body {
            background: #f2f2f259;
        }
    </style>
</head>
<body>
<div class="form">
    <div class="in">
        <?php if ($info) {
            echo $info;
        } else {
            echo "Войти";
        } ?> </div>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Имя" required><br>
        <input type="password" name="pass" placeholder="Пароль" required><br>
        <button type="submit" name="send" value="1">Войти</button>
    </form>
</div>
</body>
</html>