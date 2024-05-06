<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", " ", "proyek2_sql");

// Mengecek koneksi
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Mengambil data dari tabel pendaftaran
$query = "SELECT * FROM pendaftaran";
$result = mysqli_query($koneksi, $query);

// Memasukkan hasil query ke dalam array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Mengubah array ke format JSON
echo json_encode($data);

// Menutup koneksi
mysqli_close($koneksi);
?>
