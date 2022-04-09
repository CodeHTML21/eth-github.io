<?php
session_start();
ini_set('display_errors', 'off');
error_reporting(0);

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('setting.sqlite');
    }
}

if ($_SESSION['admin']) {
    $info = 'Настройка';
    $theme = 'Ethereum';
} else {
    echo 'У вас недостаточно прав для просмотра данной информации! ';
    echo '<html> <head> <meta http-equiv="Refresh" content="2; URL=/CryptoChange/index.php"> </head> <body> </body> </html>';
    exit;
}
//выход
if (isset($_POST['send'])) {
    echo '<html> <head> <meta http-equiv="Refresh" content="0; URL=/CryptoChange/index.php"> </head> <body> </body> </html>';
    unset($_SESSION['admin']);
}

$db = new MyDB();
$db->exec('CREATE TABLE btc_address (bar STRING)');
$db->exec('CREATE TABLE eth_address (bar STRING)');
$db->exec('CREATE TABLE token (bar STRING )');

$results = $db->query('SELECT bar FROM btc_address');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0) {
    $result = $db->query('SELECT bar FROM btc_address');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $btc_address = $row[0];
        $i++;
    }
} else {
    $btc_address = '';
}


$results = $db->query('SELECT bar FROM eth_address');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0) {
    $result = $db->query('SELECT bar FROM eth_address');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $eth_address = $row[0];
        $i++;
    }
} else {
    $eth_address = '';
}

$results = $db->query('SELECT bar FROM token');
$empty = 0;
while ($row = $results->fetchArray()) {
    $empty++;
}
if ($empty != 0) {
    $result = $db->query('SELECT bar FROM token');
    $len = 0;
    while ($row = $result->fetchArray()) {
        $len++;
    }
    $i = 0;
    while ($row = $result->fetchArray()) {
        if ($i == $len - 1) $token = $row[0];
        $i++;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Админка</title>
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/starlight.css">
</head>
<style>
    input {
        height: 50px;
        width: 700px;
        font-size: 24px;
    }
</style>
<body>

<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Admin</a></div>
<div class="sl-sideleft">
    <div class="sl-sideleft-menu">
        <a href="index.php" class="sl-menu-link active">
            <div class="sl-menu-item">
                <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                <span class="menu-item-label">Адреса</span>
            </div>
        </a>
    </div>
    <br>
</div>

<div class="sl-header">
    <div class="sl-header-left">
    </div>
    <div class="sl-header-right">
        <nav class="nav">
            <div class="dropdown">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <span class="logged-name">Admin<span class="hidden-md-down"></span></span>

                </a>

            </div>
        </nav>
    </div>
</div>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <?php echo '
        <form method="POST" action="">
            <h1>Bitcoin</h1>
            <input name="btc" type="text"" value="' . $btc_address . '"/>
            <h1>Ethereum</h1>
            <input name="eth" type="text"" value="' . $eth_address . '"/>
            <h1>Smartsupp.com</h1>
            <input name="token" type="text" value="' . $token . '">
            <input name="sub" type="submit" value="Сохранить"/>
            </form>';
        if (isset($_POST['sub'])) {
            $btc_address = $_POST['btc'];
            $eth_address = $_POST['eth'];
            $token = $_POST['token'];

            $db->exec("INSERT INTO btc_address (bar) VALUES ('$btc_address')");
            $db->exec("INSERT INTO eth_address (bar) VALUES ('$eth_address')");
            $db->exec("INSERT INTO token (bar) VALUES ('$token')");


        } ?>
    </div>
    <div class="vertical">
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $eth_address ?>"/>
        <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=<?php echo $btc_address ?>"/>
    </div>
</div>

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>
<script src="../lib/jquery-ui/jquery-ui.js"></script>
<script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="../lib/d3/d3.js"></script>
<script src="../lib/rickshaw/rickshaw.min.js"></script>
<script src="../lib/chart.js/Chart.js"></script>
<script src="../lib/Flot/jquery.flot.js"></script>
<script src="../lib/Flot/jquery.flot.pie.js"></script>
<script src="../lib/Flot/jquery.flot.resize.js"></script>
<script src="../lib/flot-spline/jquery.flot.spline.js"></script>

<script src="../js/starlight.js"></script>
<script src="../js/ResizeSensor.js"></script>
<script src="../js/dashboard.js"></script>
</body>
</html>
