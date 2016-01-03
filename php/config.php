<?php
define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));
define('DB_USERNAME', getenv('OPENSHIFT_MYSQL_DB_USERNAME'));
define('DB_PASSWORD', getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
define('DB_NAME', getenv('OPENSHIFT_GEAR_NAME'));

// setting the database connection variables
$db_host = constant("DB_host");
$db_port = constant("DB_PORT");
$db_user = constant("DB_USERNAME");
$db_pass = constant("DB_PASSWORD");
$db_name = constant("DB_NAME");

// connecting to database through a new object from class mysqli
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>
