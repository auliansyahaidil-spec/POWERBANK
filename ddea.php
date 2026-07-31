<html>
<head>
        <title>Tabel Sederhana</title>
        <style>

                    html, body { /* menatur layar supaya website bisa penuh */
                    margin: 0;
                    padding: 0;
                    height: 100%;
                    background-color: black; /* ini untuk layar belakang hitam */
                    color: white; /* opsional biar teks tetap kelihatan */
             }
             
             table {
                width: 100%;
                height: 100%;
                border-collapse: collapse;
             }
             th, td { 
                border: 1px solid black;
                text-align: center;
             }
             /* Mengatur lebar kolom 1 */
             th.kecil, td.kecil {
                width: 100px;
             }

             /* Mengatur tinggi baris */
             tr.baris1 td {
                height: 5%; /* baris pertama : 40% dari tinggi tabel */
             }

             tr.baris2 td {
                height: 10%; /* baris kedua: 30% dari tinggi tabel */
             }

             tr.baris3 td {
                height: 85%; /* baris ketiga: 30% dari tinggi tabel */
             }

             /* Layout teks kiri-kanan di dalam sel */
             .cell-flex {
                display: flex;
                justify-content: space-between; /* pisahkan kiri & kanan */
                align-items: center; /* vertikal tengah */
                height: 100%;
                padding: 0 5px;
             }

             /* Bungkus teks kiri dan kanan */
             .left-text, .right-text {
                display: flex;
                flex-direction: column; /* dua text ditumpuk */
                gap: 2px; /* jarak antar teks */
             }
            </style>
    </head>
    <body>

<?php
 echo "<table border='1'>";
 echo "<tr class='baris1'>
            <th class='kecil'>
            <div class='cell-flex'>
                     <div class='left-text'>
                        <span>POWERBANKK
                     </div>
                     <div class='right-text'>
                          <span>TLP +628675673653431     |    .powerbank@gail.com</span>
                     </div>
                    </div>
                </th>
            </tr>";
                  
echo "<tr class='baris2'>
        <td class='kecil'>
            <div class='cell-flex'>

            <!--kiri: logo + nama -->
            <div class='left-text' style='display:flex; align-items:center; gap:10px;'>
            <img src='log' alt='Logo' witdh='40' height='40'>
            <span>POWERBANK</span>
            </div>

            <!-- tengah: menu -->
            <div class='menu'>
                <a href='coba.php'>Home</a> |
                <a href='profil.php'>Profil</a> |
                <a href='stok_barang.php'>Stok Barang</a> |
                <a href='tambah.php'>Tambah Penjualan</a> |
                <a href='kontak.php'>Kontak</a>  |
                <a href='logout.php'>Logout</a>   
            </div>

            <!-- kanan: seaerch -->
            <div class='search'>
                 <from action='cari.php' method='get'>
                     <input type='text' name='q' placeholder='Cari...'>
                     <input type='submit' value='Cari'>
                 </from>
                 </div>

             </div>

                  </td>
                  </tr>";

        echo "<tr class='baris3'>
        <td class='kecil' colspan='3'>
            <div class='row-cards' style='display:flex; justify-content:space-around; gap:20px;'>

                <!-- card 1 -->
                <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center;'>
                    <img src='pb5.PNG'alt='powerbank' style='width:100%; heinght:auto;'>
                    <h2>45.OOO</h2>
                    <h3>kapasitas baterai 5000 MAH</h3> 
                    <p>* * * * *</p>
                    <p>Keunggulan: sumber daya lstrik portable prakts untuk mengisi daya</p>
                    <p>Kekurangan: resiko merusak baterai handphone</p>
                    <a href='beli.php'>
                        <button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white;'>POWERBANK
                        </button>
                  </a>
                </div>

            <!-- Card 2 -->
            <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center;'>
                    <img src='pb10.PNG' alt='powerbank' style='width:100%; heinght:auto;'>
                    <h2>85.000</h2>
                    <h3>kapasitas baterai 10.000 MAH</h3> 
                    <p>* * * * *</p>
                    <p>Keunggulan: sumber daya lstrik portable prakts untuk mengisi daya</p>
                    <p>Kekurangan: resiko merusak baterai handphone</p>
                    <a href='beli.php'>
                        <button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white;'>POWERBANK
                        </button>
                  </a>
                </div>

               <!-- Card 3 -->
               <div class='card' style='background:#111; color:white; width:30%; padding:15px; text-align:center;'>
                    <img src='pb22.PNG' alt='powerbank' style='width:100%; heinght:auto;'>
                    <h2>100.000</h2>
                    <h3>kapasitas baterai 20.000 MAH</h3> 
                    <p>* * * * *</p>
                    <p>Keunggulan: sumber daya lstrik portable prakts untuk mengisi daya</p>
                    <p>Kekurangan:  resiko merusak baterai handphone</p>
                    <a href='beli.php'>
                        <button style='margin-top:10px; padding:8px 15px; border:1px solid gold; background:none; color:white;'>POWERBANK
                        </button>
                  </a>
                </div>

                </div>
                </td>

            </tr>";
   echo "</table>";
          ?>

    </body>
    </html>






            

        


















