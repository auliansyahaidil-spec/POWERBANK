<html>
<head>
<title>tambah data</title>

<style>
body{
    background:black;
    color:white;
    font-family:Arial;
    padding:20px;
}

input{
    padding:6px;
    margin:5px;
    width:250px;
}

button{
    padding:8px 15px;
    border:1px solid gold;
    background:none;
    color:white;
}
</style>

</head>

<body>

<form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

<h3>Tambah Stok Data Barang</h3>

<table>

<tr>
    <td>Seri</td>
    <td><input type="text" name="seri" required></td>
</tr>

<tr>
    <td>Nama Barang</td>
    <td><input type="text" name="nama_barang" required></td>
</tr>

<tr>
    <td>Jenis</td>
    <td><input type="text" name="jenis" required></td>
</tr>

<tr>
    <td>Harga</td>
    <td><input type="number" name="harga" required></td>
</tr>

<tr>
    <td>Deskripsi</td>
    <td>
        <textarea name="deskripsi" rows="4" cols="30" required></textarea></td>
    </td>
</tr>

<tr>
    <td>Foto</td>
    <td>
        <input type="file" name="foto" accept="image/*" required>
    </td>
</tr>

<tr>
    <td></td>
    <td>
        <button type="submit">Simpan</button>
    </td>
</tr>

</table>

</form>

</body>
</html>