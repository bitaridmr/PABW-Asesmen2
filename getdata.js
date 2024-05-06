function getData() {
    $.ajax({
        url: 'tampil_data.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            // Panggil fungsi untuk menampilkan data ke dalam tabel
            displayData(data);
        },
        error: function(xhr, status, error) {
            console.error('Terjadi kesalahan: ' + status + error);
        }
    });
}
