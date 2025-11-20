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
<h1><strong>Bluetooth Investigator:</strong></h1>
    <h3>Search</h3>
    <form action="search.php" method="post">
        <p>
            <label for="name">Name</label>
            <input type="text" name="name">
        </p>
        <input type="submit" class="submit">
<?php
$sql = "select * from bluetooth.device_events";
if (isset($db)) {
    $statement = $db->query($sql);
}
echo "<h2>Recent Events:</h2>";
echo "<div class='options'><table>";
echo "<tr><td>MAC Address</td><td>Time</td><td>Location</td><td>Name</td><td>Event ID</td></tr>";
while ($row = $statement->fetch()) {
    echo "<tr>
                <td>$row[macaddress]</a></td>
                <td>$row[time]</td>
                <td>$row[location]</td>
                <td>$row[name]</td>
                <td>$row[eventid]</td>
                </tr>
                ";
}
?>
</body>
</html>
