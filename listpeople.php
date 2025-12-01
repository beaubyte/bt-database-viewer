<?php
require_once 'db_connect.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
    <title>People List</title>
</head>
<body>
<h3>Add New Person:</h3>
<form action="add_person.php" method="post">
    <p>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </p>
    <input type="submit" class="submit">
</form>
<h1>Search:</h1>
<?php
    $sql = "select * from bluetooth.people";
    if (isset($db)) {
        $statement = $db->query($sql);
        echo "<h3>People:</h3>";
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
?>
</body>
</html>