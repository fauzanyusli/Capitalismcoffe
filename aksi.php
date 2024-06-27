<?php
// Include file koneksi
include 'connect.php';

// Periksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];

  // Masukkan data ke database
  $sql = "INSERT INTO pesan (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
  if ($conn->query($sql) !== FALSE) {
    echo "Data berhasil dimasukkan";
  } else {
    echo "Error: ". $sql. "<br>". $conn->error;
  }
}

// Tutup koneksi
$conn->close();
?>