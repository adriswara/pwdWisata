<?php  

if (isset($_POST['upload'])) {
    include "connection_220088.php";

    $folder = 'uploads/';
    if (move_uploaded_file($_FILES['new_photo_220088']['tmp_name'], $folder . $_FILES['new_photo_220088']['name'])) {
        
        $photo = $_FILES['new_photo_220088']['name'];
        $query="UPDATE tempat_wisata_220088 SET situs_photo_220088='$photo' WHERE id_wisata_220088='$_POST[id_wisata_220088]'";

        $upload = mysqli_query($db_connection,$query);

        if ($upload) {
            if ($_POST['situs_photo_220088'] !== 'default.png') unlink($folder . $_POST['situs_photo_220088']);
                echo "<script> alert('Change photo succesed !'); window.location.replace('read_wisata.php');</script>";
        }    
            else{
                echo "<script>alert('Change photo failed ! ');window.locaion.replace('situs_photo_220088.php?id=$_POST[id_wisata_220088]');</script>";
            }
            
        }
        else echo " <script>alert('upload photo failed !');window.location.replace('situs_photo_220088.php?id=$_POST[id_wisata_220088]');</script>";
        
}
?>