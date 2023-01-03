<?php 
include "header.php";
?>
<!-- insert the page content here -->

<h3> List Pemesanan Wisata Karimun Jawa</h3>
<p><a href="add_wisata.php"> Add New Wisata</a></p>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Pemesan</th>
        <th>Email Pemesan</th>
        <th>Alamat</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Tanggal</th>
    </tr>

    <?php 
        include "connection_220088.php";
        $query = "SELECT * FROM pemesanan_220088";
        $wisata = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($wisata as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <th><?php echo $data['nama_pemesanan_220088']; ?></th>
        <th><?php echo $data['email_pemesanan_220088']; ?></th>
        <th><?php echo $data['alamat_pemesanan_220088']; ?></th>
        <th><?php echo $data['jumlah_pemesanan_220088']; ?></th>
        <th><?php echo $data['harga_pemesanan_220088']; ?></th>
        <th><?php echo $data['tanggal_pemesanan_220088']; ?></th>
    </tr>
    <?php endforeach ?>
</table>


</div>
</div>
<div id="content_footer"></div>
<div id="footer">
    Copyright &copy; black &amp; white | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a
        href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a
        href="http://www.html5webtemplates.co.uk">HTML5 Web Templates</a>
</div>
</div>
</body>

</html>