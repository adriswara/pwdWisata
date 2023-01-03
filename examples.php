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
                    <h1><a href="index.php">Karimun <span class="logo_colour">Jawa</span></a></h1>
                    <h2>Jepara Jawa Tengah</h2>
                </div>
            </div>
            <div id="menubar">
                <ul id="menu">
                    <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                    <li><a href="index.php">Home</a></li>
                    <li class="selected"><a href="examples.php">Harga</a></li>
                    <li><a href="add_pemesanan.php">Pemesanan</a></li>
                    <li><a href="read_wisata.php">Input Data</a></li>
                </ul>
            </div>
        </div>
        <div id="content_header"></div>
        <div id="site_content">

            <div id="content">
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