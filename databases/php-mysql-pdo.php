<?php
$host = "localhost";
$username = "root";
$password = null;

try {
  $conn = new PDO("mysql:host=$host;dbname=abhishek", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "connect done";
} catch (PDOException $err) {
  echo "connect failed: " . $err->getMessage();
}

echo "<br>";

$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
  print_r($row);
  echo "<br>"; // for better readability in browser
}
?>
