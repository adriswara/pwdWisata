<?php 
include "header.php";
?>
<!-- insert the page content here -->
<h1>Edit Pariwisata</h1>
<h3>Form Edit Pariwisata</h3>
<?php 
    include "connection_220088.php";
    $query = "SELECT * FROM tempat_wisata_220088 WHERE id_wisata_220088='$_GET[id]'";
    $pet=mysqli_query($db_connection,$query);
    $data=mysqli_fetch_assoc($pet);
    ?>
<form method="post" action="situs_upload_220088.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td></td>
            <td> <img src="uploads/<?= $data['situs_photo_220088']; ?>" width="100" height="100" alt=""></td>
        <tr>
            <td>New Photo</td>
            <td>: <input type="file" name="new_photo_220088" required /></td>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
                <input type="submit" name="upload" value="UPLOAD" />
                <input type="hidden" name="situs_photo_220088" value="<?= $data['situs_photo_220088'];?>" />
                <input type="hidden" name="id_wisata_220088" value="<?= $data['id_wisata_220088']; ?>" />
            </td>
        </tr>
        </tr>
        </tr>
    </table>
</form>
<p><a href="read_wisata_22008.php">CANCEL</a></p>

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