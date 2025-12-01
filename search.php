<?php
require_once 'db_connect.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
    <title>Search</title>
</head>
<body>
<h1>Search:</h1>
<?php
if (isset($_POST['name'])){
    $name = $_POST['name']; // gets data from post and assigns to variables
    $sql = "select * from bluetooth.people p inner join bluetooth.findable f on f.personid = p.personid inner join bluetooth.device_events de on de.macaddress = f.macaddress where p.name = '$name' order by de.time desc;";
    if (isset($db)) {
        $statement = $db->query($sql);
        echo "<h3>Results for $name</h3>";
        echo "<div><table>";
        echo "<tr><td>Name</td><td>MAC Address</td><td>Time</td><td>Location</td><td>Friendly Name</td></tr>";
        while ($row = $statement->fetch()) {
            echo "<tr>
                <td>$row[name]</a></td>
                <td>$row[macaddress]</td>
                <td>$row[time]</td>
                <td>$row[location]</td>
                <td>$row[friendlyname]</td>
                </tr>
                ";
        }
    }
} else {
    echo "<h1><strong>No search query was found</strong></h1>";
}
?>
</body>
</html>