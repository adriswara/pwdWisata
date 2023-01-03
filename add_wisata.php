<?php 
include "header.php";
?>
<!-- insert the page content here -->
<h1>Add Pariwisata</h1>
<h3>Form Add Pariwisata</h3>
<form method="POST" action="create_wisata.php">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_tempat_220088" required></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><input type="text" name="kota_220088" required></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>
                <textarea name="deskripsi_220088" required></textarea>
            </td>
        </tr>
        <tr>
            <td>Harga Tiket</td>
            <td><input type="number" name="harga_tiket_220088" required></td>
        </tr>
        <tr>
            <td>Jam Operasional</td>
            <td><input type="text" name="jam_operasional_220088" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="save" value="SAVE">
                <input type="reset" name="reset" value="RESET">
            </td>
        </tr>

        <table>
</form>
<p><a href="read_wisata.php">CANCEL</a></p>

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