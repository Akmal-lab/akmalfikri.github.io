<?php
$konek=mysqli_connect("localhost","root","","perusahaan_ptuq") or die(mysqli_connect_error());

echo"<h3>Proses Simpan<h3>";
include "fungsi_thumb.php";
if (isset($_POST['tambah'])){
    $lokasi_file =$_FILES['foto']['tmp_name'];
    $nama_file=$_FILES['foto']['name'];
    $acak = rand(000000,999999);
    $nama_file_ok=$acak.$nama_file;

$nip =$_POST['nip'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jabatan =$_POST['jabatan'];



//tentukan folder gambar
$folder="foto/";
thumb($nama_file_ok,$folder);

 $cek= mysqli_query($konek,"SELECT*FROM pegawai_a WHERE nip='$nip'");
 if (mysqli_num_rows($cek)>0 ) {
    echo" Data pegawai dengan $nip sudah terpakai";
 }else{
    $tambah=mysqli_query($konek,"INSERT INTO pegawai_a VALUES('$nip','$nama','$alamat','$jabatan','$nama_file_ok')");
    if($tambah){
        echo"Berhasil menyimpan data <b>$nama</b> ";}
    else{
        echo"Gagal menyimpan data";
    }
}
}
?>