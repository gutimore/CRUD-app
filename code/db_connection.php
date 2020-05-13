<?php
echo $_ENV['MYSQLCONNSTR_connstring'];
parse_str($_ENV['MYSQLCONNSTR_connstring'], $conn_str);
// Create connection
$conn = mysqli_connect($conn_str['servername'], $conn_str['username'], $conn_str['password'], $conn_str['db_name']);

// Check connection
if (!$conn) {
    die("-> Connection failed: " . mysqli_connect_error());
}
?>
