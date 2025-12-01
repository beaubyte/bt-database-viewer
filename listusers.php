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
<h1>Search:</h1>
<?php
if (isset($_POST['user'])){
    $user = $_POST['user']; // gets data from post and assigns to variables
    $sql = "select * from bluetooth.people";
    if (isset($db)) {
        $statement = $db->query($sql);
        echo "<h3>Results for $user</h3>";
        echo "<div><table>";
        echo "<tr><td>Name</td><td>Person ID</td></tr>";
        while ($row = $statement->fetch()) {
            echo "<tr>
                <td>$row[name]</a></td>
                <td>$row[personid]</td>
                </tr>
                ";
        }
    }
} else {
    echo "<h1><strong>No users were found, why not make a new one?</strong></h1>";
}
?>
</body>
</html>