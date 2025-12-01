<?php
require_once 'db_connect.php';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link rel="stylesheet" href="styles.css">
    <title>Add Person</title>
</head>
<body>
<h1>Add Device:</h1>
<?php
if (isset($_POST['name'])){
    $name = $_POST['name'];
    $sql = "insert into bluetooth.people (name) values ('$name');";
    if (isset($db)) {
        $statement = $db->query($sql);
        echo "$name Added!";
    }
} else {
    echo "<h1><strong>No person was specified</strong></h1>";
}
?>
<p><a href="index.php">return to home</a>
</body>
</html>