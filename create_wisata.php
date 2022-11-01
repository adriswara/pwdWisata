<?php 

if (isset($_POST)) {
    include "connection_220088.php";
}


$query = 
"INSERT INTO tempat_wisata_220088 
(nama_tempat_220088, kota_220088, deskripsi_220088, harga_tiket_220088, jam_operasional_220088) 
VALUES 
('$_POST[nama_tempat_220088]','$_POST[kota_220088]','$_POST[deskripsi_220088]','$_POST[harga_tiket_220088]','$_POST[jam_operasional_220088]')";
$create = mysqli_query($db_connection ,$query);



if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('Pet added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('pet add failed!'); </script>";
}


?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_wisata.php");
</script>