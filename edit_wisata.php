<!DOCTYPE HTML>
<html>

<head>
    <title>Karimun Jawa</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
    <div id="main">
        <div id="header">
            <div id="logo">
                <div id="logo_text">
                    <!-- class="logo_colour", allows you to change the colour of the text -->
                    <h1><a href="index.html">Karimun <span class="logo_colour">Jawa</span></a></h1>
                    <h2>Jepara Jawa Tengah</h2>
                </div>
            </div>
            <div id="menubar">
                <ul id="menu">

                    <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                    <li><a href="index.php">Home</a></li>
                    <li><a href="examples.php">Harga</a></li>
                    <li class="selected"><a href="contact.php">Pemesanan</a></li>
                </ul>
            </div>
        </div>
        <div id="content_header"></div>
        <div id="site_content">

            <div id="content">
                <!-- insert the page content here -->
                <h1>Edit Pariwisata</h1>
                <h3>Form Edit Pariwisata</h3>
                <form method="POST" action="update_wisata.php">

                    <?php 
   include "connection_220088.php";
   $querry = "SELECT * FROM tempat_wisata_220088 WHERE id_wisata_220088='$_GET[id]'";
   $pet=mysqli_query($db_connection,$querry);
   $data=mysqli_fetch_assoc($pet);  
    ?>

                    <table>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama_tempat_220088" value="<?= $data['nama_tempat_220088']; ?>"
                                    required></td>
                        </tr>
                        <tr>
                            <td>Kota</td>
                            <td><input type="text" name="kota_220088" value="<?= $data['kota_220088']; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>
                                <textarea name="deskripsi_220088"
                                    required> <?= $data['deskripsi_220088']; ?> </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga Tiket</td>
                            <td><input type="number" name="harga_tiket_220088"
                                    value="<?= $data['harga_tiket_220088']; ?>" required></td>
                        </tr>
                        <tr>
                            <td>Jam Operasional</td>
                            <td><input type="text" name="jam_operasional_220088"
                                    value="<?= $data['jam_operasional_220088']; ?>" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="save" value="SAVE">
                                <input type="reset" name="reset" value="RESET">
                                <input type="hidden" name="id_wisata_220088" value="<?=$data['id_wisata_220088']?>">
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