function deleteData(id) {
    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
        $.ajax({
            url: 'hapus_data.php?id=' + id,
            type: 'GET',
            success: function(response) {
                // Muat ulang data setelah penghapusan
                getData();
            },
            error: function(xhr, status, error) {
                console.error('Terjadi kesalahan: ' + status + error);
            }
        });
    }
}
