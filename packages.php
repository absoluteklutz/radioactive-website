<?php 
$gid = parse_url($_SERVER['REQUEST_URI']);
$conn = new mysqli("localhost", "root", '', "radioactive");
$query = $conn->real_escape_string($gid['query']);
$package = $conn->query("SELECT * FROM packages WHERE packagename = '$query'");
while ($row = $package->fetch_assoc()) {
    echo str_replace(array("\r\n","\r","\n"),'<br style="color:red;">',$row['content']);
}
?>