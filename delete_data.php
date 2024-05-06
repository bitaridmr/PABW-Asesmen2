<?php
// Mengatur koneksi ke database
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'proyek2_sql';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi ke MySQL gagal: " . $conn->connect_error);
}

// Memeriksa apakah parameter ID diterima dari permintaan GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Menyiapkan dan menjalankan query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM pendaftaran WHERE id = $id"; // Ganti "pendaftaran" dengan nama tabel yang sesuai
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil dihapus";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "ID tidak ditemukan";
}

// Menutup koneksi ke database
$conn->close();
?>
