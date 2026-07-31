<?php
include "koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM tmbbrg"); // sesuaikan tabel tambah barang
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stok Barang</title>

    <style>
        body{
            background:#0f0f0f;
            color:white;
            font-family:'Segoe UI', sans-serif;
        }

        h2{
            text-align:center;
        }

        .card{
            background:#1a1a1a;
            border-radius:15px;
            width:250px;
            padding:15px;
            margin:15px;
            display:inline-block;
            vertical-align:top;
            text-align:center;
            transition:0.3s;
            box-shadow:0 0 10px rgba(255,255,255,0.05);
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 0 20px rgba(255,215,0,0.3);
        }

        img{
            width:100%;
            height:160px;
            object-fit:cover;
            border-radius:10px;
        }

        .price{
            color:gold;
            font-size:18px;
            margin:5px 0;
        }

        .qty-box{
            display:flex;
            justify-content:center;
            align-items:center;
            margin-top:10px;
        }

        .qty-box button{
            width:35px;
            height:35px;
            border:none;
            background:gold;
            color:black;
            font-weight:bold;
            font-size:18px;
            border-radius:8px;
            cursor:pointer;
        }

        .qty-box input{
            width:50px;
            text-align:center;
            margin:0 8px;
            padding:5px;
            border-radius:8px;
            border:none;
        }

        .cart-btn{
            padding:10px;
            width:50px;
            height:36px;
            border:none;

        background: linear-gradient(45deg, gold, orange);
            color: white;
            font-size: 18px;
            border-radius: 10px;
            cursor: pointer;
        }

        .buy-btn{
            padding: 10px;
            width: 80%;
            border: none;
            background: linear-gradient(45deg, gold, orange);
            color: black;
            font-weight: bold;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }
        
           
</style>

<script>
function tambah(id) {
    let qty = document.getElementById('qty_' + id);
    qty.value = parseInt(qty.value) + 1;
}

function kurang(id) {
    let qty = document.getElementById('qty_' + id);

    if (qty.value > 1) {
        qty.value = parseInt(qty.value) - 1;
    }
}

function setQty(id) {
    let val = document.getElementById('qty_' + id).value;
    document.getElementById('cart_qty_' + id).value = val;
    document.getElementById('buy_qty_' + id).value = val;
}
</script>

</head>

<body>

<h2>🛒 Selamat Datang</h2>
<h2>✨ Selamat Berbelanja di Toko Kami</h2>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="card">

    <img src="uploads/<?php echo $row['foto']; ?>">

    <div class="price">
        Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?>
    </div>

    <b><?php echo $row['nama_barang']; ?></b><br>
    <small><?php echo $row['seri']; ?></small>

<p>⭐⭐⭐⭐⭐</p>

<p style="font-size:13px; color:#ccc;">
    <?php echo $row['deskripsi']; ?>
</p>

<!-- QTY -->
<div class="qty-box">
    <button type="button" onclick="kurang(<?php echo $row['id_barang']; ?>)">-</button>

    <input
        type="number"
        id="qty_<?php echo $row['id_barang']; ?>"
        value="1"
        min="1">

    <button type="button" onclick="tambah(<?php echo $row['id_barang']; ?>)">+</button>
</div>

<!-- BUTTON -->
<div style="display:flex; gap:10px; margin-top:10px;">

    <!-- CART -->
    <form action="keranjang.php" method="post" style="flex:1;">
        <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
        <input type="hidden" name="nama" value="<?php echo $row['nama_barang']; ?>">
        <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>">
        <input type="hidden" name="jumlah" id="cart_qty_<?php echo $row['id_barang']; ?>">

        <button
            class="cart-btn"
            type="submit"
            onclick="setQty(<?php echo $row['id_barang']; ?>)">
            🛒
        </button>
    </form>

    <!-- BELI -->
    <form action="beli.php" method="get" style="flex:3;">
        <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']; ?>">
        <input type="hidden" name="jumlah" id="buy_qty_<?php echo $row['id_barang']; ?>">

        <button
            class="buy-btn"
            type="submit"
            onclick="setQty(<?php echo $row['id_barang']; ?>)">
            Beli Sekarang
        </button>
    </form>

</div>

</div>

<?php } ?>

</body>
</html>