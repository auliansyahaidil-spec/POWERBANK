<?php
include "koneksi.php";

// ambil data dari database dengan tabel tmbbrg
$seri        = $_POST['seri'];
$nama_barang = $_POST['nama_barang'];
$jenis       = $_POST['jenis'];
$harga       = $_POST['harga'];
$deskripsi   = $_POST['deskripsi'];

// upload foto
$foto   = $_FILES['foto']['name'];
$tmp    = $_FILES['foto']['tmp_name'];
$folder = "uploads/";

if (move_uploaded_file($tmp, $folder . $foto)) {

    // simpan ke database
    $sql = "INSERT INTO tmbbrg
            (seri, nama_barang, jenis, harga, deskripsi, foto)
            VALUES('$seri', '$nama_barang', '$jenis', '$harga', '$deskripsi', '$foto')";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location='stok_barang.php';
              </script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }

} else {
    echo "Upload foto gagal!";
}
?>