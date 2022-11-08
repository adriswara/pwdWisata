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
                <h1>Pesan Tiket</h1>
                <p>Isi form di bawah ini untuk pemesanan tiket</p>
                <form action="#" method="post">
                    <div class="form_settings">
                        <p><span>Nama</span><input class="pesan" type="text" id="nama" required value="" /></p>
                        <p><span>Email</span><input class="pesan" type="text" id="email" required value="" /></p>
                        <p><span>Alamat</span><input class="pesan" type="text" id="alamat" required value="" /></p>
                        <p><span>Jumlah</span><input class="pesan" type="text" id="jumlah" required value="" /></p>
                        <p><span>Tanggal</span><input class="pesan" type="text" id="tanggal" required value="" /></p>

                        <button onclick="pesan()" class="submit" type="submit" value="submit">Pesan</button>

                    </div>
                </form>
                <p id="hasil"></p>
                <p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an
                    email
                    address.</p>
            </div>
        </div>
        <div id="content_footer"></div>
        <div id="footer">
            Copyright &copy; black &amp; white | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a
                href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a
                href="http://www.html5webtemplates.co.uk">HTML5 Web Templates</a>
        </div>
    </div>
    <script>
    function pesan() {
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var alamat = document.getElementById("alamat").value;
        var jumlah = document.getElementById("jumlah").value;
        var tanggal = document.getElementById("tanggal").value;
        window.alert('sudah dipesan atas Nama : ' + nama + 'email : ' + email + 'dengan alamat asal :' + alamat +
            'Total tiket:' + jumlah + 'Untuk Tanggal :' + tanggal);
    }
    </script>
</body>

</html>