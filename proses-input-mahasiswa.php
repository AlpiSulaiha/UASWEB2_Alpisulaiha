<?php

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$nama_ortu=$_POST['nama_ortu'];
$nomor=$_POST['nomor'];
$asal=$_POST['asal'];

include "koneksi.php";

$query=$koneksi->query("insert into mahasiswa(nim,nama,jenis_kelamin,alamat,nama_ortu,nomor,asal) values ('$nim','$nama','$jenis_kelamin','$alamat','$nama_ortu','$nomor','$asal')");

if($query==true){
    header("location:tampil-mahasiswa.php?pesan=inputBerhasil");
} else {
    echo "Error";

}

?>