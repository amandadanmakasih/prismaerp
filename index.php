<?php
include 'koneksi.php'; // 

$query = "SELECT * FROM user"; // 
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "Nama: " . $row['nama'] . "<br>";
}
?>
