<?php 

if (isset($_POST['save'])) {
    include "connection_220088.php";



$query = "UPDATE tempat_wisata_220088 SET 
          nama_tempat_220088 = '$_POST[nama_tempat_220088]', 
          kota_220088 = '$_POST[kota_220088]', 
          deskripsi_220088 = '$_POST[deskripsi_220088]', 
          harga_tiket_220088 = '$_POST[harga_tiket_220088]',
          jam_operasional_220088 = '$_POST[jam_operasional_220088]'
          WHERE id_wisata_220088 = '$_POST[id_wisata_220088]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>doctor update succesfully !</p>";
    echo "<script> alert('wisata update succesfuly !'); </script>";
    }
    else{
    // echo "<p>wisata update failed !</p>";
    echo "<script> alert('wisata update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_doctor_220088.php">BACK TO doctorS LIST</a></p> -->
<script>
window.location.replace("read_wisata.php");
</script>