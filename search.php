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
<?php
if (isset($_POST['name'])){
    $name = $_POST['name']; // gets data from post and assigns to variables
    $sql = "select * from bluetooth.people p inner join bluetooth.findable f on f.personid = p.personid inner join bluetooth.device_events de on de.macaddress = f.macaddress where p.name = $name;";
    if (isset($db)) {
        $statement = $db->query($sql);
    }
    echo "<h3>Results for $name</h3>";


} else {
    echo "<h1><strong>Sorry, we couldn't find your order</strong></h1>";
}
?>
</body>
</html>