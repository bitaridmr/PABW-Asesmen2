<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", " ", "proyek2_sql");


// Periksa koneksi
if (mysqli_connect_errno()) {
    echo json_encode(["error" => "Koneksi database gagal: " . mysqli_connect_error()]);
    exit();
}

// Pastikan parameter ID telah diterima
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Query untuk menghapus data dari tabel
    $query = "DELETE FROM nama_tabel WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    if($result) {
        // Jika penghapusan berhasil, kirimkan respons sukses
        echo json_encode(["success" => "Data berhasil dihapus"]);
    } else {
        // Jika terjadi kesalahan saat menghapus data, kirimkan respons error
        echo json_encode(["error" => "Gagal menghapus data"]);
    }
} else {
    // Jika parameter ID tidak diterima, kirimkan respons error
    echo json_encode(["error" => "Parameter ID tidak ditemukan"]);
}

// Menutup koneksi
mysqli_close($koneksi);
?>