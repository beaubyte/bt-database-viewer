<?php
require_once 'db_connect.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
    <title>Bluetooth Investigator</title>
</head>
<body>
<h1><strong>Bluetooth Investigator:</strong></h1>
    <h3>Search for Person</h3>
    <form action="search.php" method="post">
        <p>
            <label for="name">Name: </label>
            <input type="text" name="name">
        </p>
        <input type="submit" class="submit">
    </form>
    <h3>Add Device</h3>
    <form action="add_device.php" method="post">
        <p>
            <label for="personid">Person ID: </label>
            <input type="text" name="personid">
            <br>
            <label for="macaddress">Mac Address: </label>
            <input type="text" name="macaddress">
            <br>
            <label for="friendlyname">Device Name: </label>
            <input type="text" name="friendlyname">
        </p>
        <input type="submit" class="submit">
    </form>
<p><a href="listpeople.php">List People</a></p>
<p><a href="clearevents.php">Clear Events</a></p>
<?php
$sql = "select * from bluetooth.device_events order by eventid desc limit 100;";
if (isset($db)) {
    $statement = $db->query($sql);
}
echo "<h2>Recent Events:</h2>";
echo "<div><table>";
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
