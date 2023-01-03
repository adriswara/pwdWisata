<?php 
include "header.php";
?>
<!-- insert the page content here -->
<h1>Input basis data</h1>
<p>Isi form di bawah ini untuk pemesanan tiket</p>

<h1>Wisata Adriswara</h1>
<h3> List Wisata</h3>
<p><a href="add_wisata.php"> Add New Wisata</a></p>
<table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Kota</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Jam</th>
        <th colspan="3">Action</th>
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
        <th><?php echo $data['nama_tempat_220088']; ?></th>
        <th><?php echo $data['kota_220088']; ?></th>
        <th><?php echo $data['deskripsi_220088']; ?></th>
        <th><?php echo $data['harga_tiket_220088']; ?></th>
        <th><?php echo $data['jam_operasional_220088']; ?></th>
        <td><a href="add_pemesanan.php?id=<?=$data['id_wisata_220088']?>">Pesan Wisata</a></td>
        <td><a href="edit_wisata.php?id=<?=$data['id_wisata_220088']?>">Edit Wisata</a></td>
        <td><a href="delete_wisata.php?id=<?=$data['id_wisata_220088']?>"
                onclick="return confirm('Are You sure?')">Delete Wisata</a></td>
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