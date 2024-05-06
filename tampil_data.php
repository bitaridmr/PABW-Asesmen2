<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "proyek2_sql");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo json_encode(["error" => "Koneksi database gagal: " . mysqli_connect_error()]);
    exit();
}

// Query untuk mengambil data dari tabel
$query = "SELECT * FROM pendaftaran";
$result = mysqli_query($koneksi, $query);

// Inisialisasi array untuk menyimpan data
$data = [];

// Memasukkan data dari tabel ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Menutup koneksi
mysqli_close($koneksi);

// Mengirim data dalam format JSON
echo json_encode($data);
?>
