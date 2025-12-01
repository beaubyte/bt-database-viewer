<?php
require_once 'db_connect.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Add Device:</h1>
<?php
    if (isset($_POST['personid'])){
        $personid = $_POST['personid'];
        $macaddress = $_POST['macaddress'];
        $friendlyname = $_POST['friendlyname'];
        $sql = "insert into bluetooth.findable (personid, macaddress, friendlyname) values ('$personid', '$macaddress', '$friendlyname')";
        if (isset($db)) {
            echo "Device Added!";
        }
    } else {
        echo "<h1><strong>No device was specified</strong></h1>";
    }
?>
<p><a href="index.php">return to home</a>
</body>
</html>