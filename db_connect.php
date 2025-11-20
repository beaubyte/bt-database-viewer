<?php
    $env = parse_ini_file('.env');
    $dbhost = $env["DB_HOST"];
    $dbname = $env["DB_NAME"];
    $dbpass = $env["DB_PASS"];
    $dbuser = $env["DB_USER"];

try {
    // Create a PDO instance
    $db = new PDO("postgresql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to database: " . $e->getMessage();
    exit;
}
?>
