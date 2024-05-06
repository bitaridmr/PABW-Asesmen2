<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "proyek2_sql");

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Query untuk mengambil data transaksi
$sql = "SELECT * FROM pendaftaran";
$result = mysqli_query($conn, $sql);

// Mengubah hasil query menjadi array asosiatif
$rows = array();
while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Mengubah data menjadi format JSON
echo json_encode($rows);

// Menutup koneksi
mysqli_close($conn);
?>