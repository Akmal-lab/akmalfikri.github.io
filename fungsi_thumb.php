<?php
function thumb($fupload_name,$direktori){
    //File gambar yang diupload

    $file_upload=$direktori.$fupload_name;

    $nama_gbr_asli =$_FILES['foto']['tmp_name'];
    move_uploaded_file($nama_gbr_asli,$file_upload);
}