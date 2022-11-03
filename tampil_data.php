<html>
    <head>
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
<?php
$konek = mysqli_connect("localhost","root","","perusahaan_ptuq") or die(mysqli_error());

echo"
<div = 'center'><table width='600' border='1' class='table table-dark table-hover'>
<tr>
<th width='45' align='center'>No</th>
<th width='105' align='center'>NIP</th>
<th width='250' align='center'>Nama</th>
<th width='120' align='center'>Alamat</th>
<th width='120' align='center'>Jabatan</th>
<th width='120' align='center'>Foto</th>
<th width='120' align='center'>Aksi</th></tr>";

$tampil= mysqli_query($konek, "SELECT * FROM pegawai_a");
$no=1;
while ($data = mysqli_fetch_array($tampil))
{
    $nip=$data['nip'];
    $nama=$data['nama'];
    $alamat=$data['alamat'];
    $jabatan=$data['jabatan'];
    $foto=$data['foto'];


    echo"<tr><td>$no</td><td>$nip</td><td>$nama</td>
    <td>$alamat</td><td>$jabatan</td><td><img src='foto/$foto'width='200' height='120'></td>
    <td><a href='edit_pegawai.php?nip=$nip'>Edit</a>
    <a href='Hapus_pegawai.php?nip=$nip'>Hapus</a>
    <a href='form_pegawai.html'>KEMBALI</a></td></tr>";
    $no++;
}

echo"</table>";
?>