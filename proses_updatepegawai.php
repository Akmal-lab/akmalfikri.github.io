<?php
$konek =mysqli_connect("localhost","root","","perusahaan_ptuq")or die(mysqli_error());

echo"<h3>Proses Update</h3>";
include "fungsi_thumb.php";
if (isset($_POST['tambah'])){
    $lokasi_file =$_FILES['foto']['tmp_name'];
    $nama_file=$_FILES['foto']['name'];
    $acak = rand(000000,999999);
    $nama_file_ok=$acak.$nama_file;

$nip =$_POST['nip'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$jabatan =$_POST['jabatan'];
$foto=$_POST['foto'];

$update = mysqli_query($konek, "UPDATE pegawai_a SET nama='$nama', alamat='$alamat', jabatan='$jabatan', foto='$foto' WHERE nip='$nip'");
if ($update){echo"Data pegawai $nama berhasil diupdate";}
else
{echo"Gagal mengupdate data";}
}
?>