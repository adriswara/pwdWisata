<?php 

if (isset($_POST)) {
    include "connection_220088.php";
}


$query = "INSERT INTO pemesanan_220088 (nama_pemesanan_220088, email_pemesanan_220088, alamat_pemesanan_220088, jumlah_pemesanan_220088, harga_pemesanan_220088, tanggal_pemesanan_220088) VALUES ('$_POST[nama_pemesanan_220088]','$_POST[email_pemesanan_220088]','$_POST[alamat_pemesanan_220088]','$_POST[jumlah_pemesanan_220088]','$_POST[harga_pemesanan_220088]','$_POST[tanggal_pemesanan_220088]')";
$create = mysqli_query($db_connection ,$query);



if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('wisata added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('wisata add failed!'); </script>";
}


?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("examples.php");
</script>