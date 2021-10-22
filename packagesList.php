<?php 
$conn = new mysqli("localhost", "root", '', "radioactive");
$package = $conn->query("SELECT * FROM packages");
while ($row = $package->fetch_assoc()) {
    echo $row['packageName'] + "\n";
}
?>