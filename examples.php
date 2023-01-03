<?php 
include "header.php";
?>
<!-- insert the page content here -->
<h1>Informasi harga</h1>
<p>Kami sajikan rincian biaya wisata karimunjawa untuk anda yang ingin liburan ke karimunjawa.
    Rencanakan
    budgeting liburan anda karimunjawa dari Jakarta, Bandung, Jogja, Surabaya atau luar wilayah jawa.

    Sebelum liburan dan menuju ke kabupaten Jepara, kami sarankan sahabat traveler untuk menghitung
    biaya
    transportasi dari kota anda sampai pelabuhan Jepara. Hitung BBM jika naik kendaraan pribadi, dan
    biaya jajan
    selama perjalanan. Dan hitung juga tiket transport hingga sampai kota Jepara, apabila menggunakan
    kendaraan
    umum.</p>

<p>Biaya perjalanan anda sangat fleksibel tergantung pada kebutuhan dan jarak kota. Selanjutnya, jika
    anda sudah
    tiba di Kabupaten Jepara, berikut adalah rincian belanja selama wisata Karimun Jawa.
</p>
<!-- insert the page content here -->
<p>Isi form di bawah ini untuk pemesanan tiket</p>

<table border="0">
    <tr>

    </tr>

    <?php 
        include "connection_220088.php";
        $query = "SELECT * FROM tempat_wisata_220088";
        $wisata = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($wisata as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['nama_tempat_220088']; ?></td>
        <td><?php echo $data['kota_220088']; ?></td>
        <td><?php echo $data['deskripsi_220088']; ?></td>
        <td><?php echo $data['harga_tiket_220088']; ?></td>
        <td><?php echo $data['jam_operasional_220088']; ?></td>
        <td align="center"><img src="uploads/<?= $data['situs_photo_220088'];?>" width="50" height="50" alt=""><br>
        </td>
        <td><a href="add_pemesanan.php?id=<?=$data['id_wisata_220088']?>">Pesan Wisata</a></td>

    </tr>
    <?php endforeach ?>
</table>


</div>
</div>



<div id="content_footer"></div>
<div id="footer">
    Copyright &copy; black &amp; white | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> |
    <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a
        href="http://www.html5webtemplates.co.uk">HTML5 Web Templates</a>
</div>
</div>
</body>

</html>