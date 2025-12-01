<?php
require_once 'db_connect.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
    <title>Clear Events</title>
</head>
<body>
<h1>Clearing Events</h1>
<?php
$sql = "delete from bluetooth.device_events;";
if (isset($db)) {
    $statement = $db->query($sql);
    echo "<p>All events cleared</p>";
}
?>
</body>
</html>