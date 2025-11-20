<?php
require_once 'db_connect.php';
// $db is available as a PDO instance connected to MySQL
require_once 'globals.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
// code from timesavers that i'm gonna adapt:
<h1><strong>Database Contents</strong></h1>
<?php
$sql = "select * from Stock";
$statement = $db->query($sql); // fetches all content in Stock and displays on HTML table
echo "<h2>Available Stock:</h2>";
echo "<div class='options'><table>";
echo "<tr><td>ID</td><td>Time</td><td>Duration</td><td>Region</td><td>Flexibility</td><td>Price</td></tr>";
while ($row = $statement->fetch()) {
    echo "<tr>
                <td>$row[ID]</a></td>
                <td>$row[Start]</td>
                <td>$row[Duration] min</td>
                <td>$row[Region]</td>
                <td>$row[Flex] min</td>
                <td>$row[Price]</td>
                </tr>
                ";
}
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
?>
</body>
</html>
