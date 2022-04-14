<?php
/** This file is intended to get data from DBServer, and display it upon accessing the website. */
$servername = "192.168.2.13";
$username = "admin";
$password = "password";
$dbname = "init";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection to database failed" . $conn->connect_error);
}

$result = mysqli_query($conn, "SELECT * FROM data");

if(mysqli_num_rows($result) > 0){
$i = 0;
echo "<table>";
while($row = mysqli_fetch_array($result)){
echo "<tr><td>First Name:" . $row["adata"] . "</td>"; 
echo "<td>Last Name:" . $row["bdata"] . "</td>";
echo "<td>Number:" . $row["cdata"] . "</td></tr>";
}
}
echo "</table>";
mysqli_close($conn);
?>