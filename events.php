<?php
global $db;
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
<?php
$sql = "select * from bluetooth.device_events";
$statement = $db->query($sql); // fetches all content in Stock and displays on HTML table
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
/*
echo "</table></div>";
$sql = "select * from Requests";
$statement = $db->query($sql); // fetches all content in Requests and displays on HTML table
echo "<h2>Pending Orders:</h2>";
echo "<div class='options'><table>";
echo "<tr><td>ID</td><td>Time</td><td>Duration</td><td>Location</td><td>Contact Info</td></tr>";
while ($row = $statement->fetch()) {
    echo "<tr>
                <td>$row[ID]</td>
                <td>$row[Start]</td>
                <td>$row[Duration] min</td>
                <td>$row[Location]</td>
                <td>$row[Contact]</td>
                </tr>
                ";
}

echo "</table></div>";
$sql = "select * from Payments";
$statement = $db->query($sql); // fetches all content in Payments and displays on HTML table
echo "<h2>Purchase History:</h2>";
echo "<div class='options'><table>";
echo "<tr><td>ID</td><td>Name</td><td>Card Number</td><td>Time of Purchase</td></tr>";
while ($row = $statement->fetch()) {
    echo "<tr>
                <td>$row[ID]</td>
                <td>$row[CardName]</td>
                <td>$row[CardNum]</td>
                <td>$row[TimeOfPurchase]</td>
                </tr>
                ";
}
echo "</table></div>";
*/
?>
</body>
</html>
