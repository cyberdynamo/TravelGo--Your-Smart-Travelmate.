<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project001";


$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * from path where source='srinagar'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["source"]. " " . $row["destination"]." ".$row["cost"]."<br>";
  }
} else {
  echo "0 results";
}




$conn->close();
?>