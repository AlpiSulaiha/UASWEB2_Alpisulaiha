<?php

include "koneksi.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$nama_ortu=$_POST['nama_ortu'];
$nomor=$_POST['nomor'];
$asal=$_POST['asal'];

$ubah=$koneksi->query("update mahasiswa set nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', nama_ortu='$nama_ortu', nomor='$nomor', asal='$asal' where mahasiswa_id='$id'");

if($ubah==true){

    header("location:tampil-mahasiswa.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>