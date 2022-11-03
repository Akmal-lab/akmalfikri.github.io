<?php
echo"<h3>Edit Data Pegawai</h3>";
$konek= mysqli_connect("localhost","root","","perusahaan_ptuq") or die(mysqli_connect_error());

$nip= $_GET['nip'];
$cek= mysqli_query($konek,"SELECT*FROM pegawa_a WHERE nip='$nip'");
$data= mysqli_fetch_array($cek);
    $nip=$data['nip'];
    $nama=$data['nama'];
    $alamat=$data['alamat'];
    $jabatan=$data['jabatan'];
   

echo"
<form action='proses_updatepegawai.php' method='post'>		
<table width='450'>
                <tr><td>NIP</td><td>:</td><td><input type='text' name='nip' size='30' value='".$nip."' readonly></td></tr>
                <tr><td>Nama</td><td>:</td><td><input type='text' name='nama' size='40' value='".$nama."'></td></tr>
                <tr><td>Alamat</td><td>:</td><td><input type='text' name='alamat' size='30' value='".$alamat."'></td></tr>
                <tr><td>$Jabatan</td><td>:</td><td><select name='jabatan'>
                <option value=''>-Silakan Pilih-</option>
                <option value='Manager'>Manager</option>
                <option value='Mekanik'>Mekanik</option>
                <option value='Staff'>Staff</option>
                </select></td></tr>
                <tr><td>File</td><td>:</td><td><input type='file'name='foto' size='30'>
                ";
                if (empty($foto)){
                    echo""; 
                }else {
                    echo"<img src='foto/$foto' width ='230' hight='160'><br>
                </td></tr>
				<tr>
					<td colspan='3'><input type='submit' value='Update'>
					<input type='reset' value='Cancel'></td>
				
				</tr>

</table>
</form>";
            }

?>