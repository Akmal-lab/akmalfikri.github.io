<?php
$konek =mysqli_connect('localhost','root','','perusahaan_ptuq') or die(mysqli_error());

echo "<h3>Proses Hapus</h3>";
$nip=$_REQUEST['nip'];
$hapus =mysqli_query($konek, "DELETE FROM pegawai_a WHERE nip='$nip'");
if($hapus){echo"Data pegawai berhasil dihapus";}
else
{echo"Gagal menghapus data";}
?>
