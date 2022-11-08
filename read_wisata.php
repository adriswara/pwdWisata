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
                        <th colspan="2">Action</th>
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
                        <td><a href="edit_wisata.php?id=<?=$data['id_wisata_220088']?>">Edit Pet</a></td>
                        <td><a href="delete_wisata.php?id=<?=$data['id_wisata_220088']?>"
                                onclick="return confirm('Are You sure?')">Delete Pet</a></td>
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