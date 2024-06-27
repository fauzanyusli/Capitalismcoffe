<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "purchase"; 

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $price = $_POST['price'];

  $sql = "INSERT INTO pembelian (nama_produk, harga_produk) VALUES ('$name', '$price')";

  if ($conn->query($sql) === TRUE) {
    echo "Data pembelian berhasil ditambahkan";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
