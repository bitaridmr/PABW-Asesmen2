function displayData(data) {
    var tableBody = $('#data-table tbody');
    tableBody.empty(); // Kosongkan isi tabel sebelum menambahkan data baru

    // Iterasi melalui data dan tambahkan ke dalam tabel
    $.each(data, function(index, row) {
        var tr = $('<tr>');
        tr.append('<td>' + row.id_daftar + '</td>');
        tr.append('<td>' + row.nama_pelanggan + '</td>');
        tr.append('<td>' + row.tanggal_daftar + '</td>');
        tr.append('<td>' + row.alamat + '</td>');
        tr.append('<td>' + row.no_tlp + '</td>');
        tr.append('<td>' + row.nomor_mobil + '</td>');
        tr.append('<td><button onclick="deleteData(' + row.id + ')">Hapus</button></td>');
        tableBody.append(tr);
    });
}
