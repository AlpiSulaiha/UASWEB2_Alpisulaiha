<!doctype html>
<html>
<head>
    <tittle> </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Mahasiswa</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>


<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td> <center><b> NIM </center></td> <td> <center><b>Nama </center></td>
        <td><center><b>Jenis Kelamin </center></td> <td> <center><b>Alamat </center></td><td> <center><b>Nama Orang Tua</center></td> <td> <center><b> Nomor Telpon </center></td> <td> <center><b> Asal Sekolah </center></td>
        <th> 
            <a href="input-mahasiswa.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from mahasiswa order by nim ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
       <td> <center> <?php echo $row['nim'] ?> </center> </td>
         <td> <center> <?php echo $row['nama'] ?> </center> </td>
         <td> <center> <?php echo $row['jenis_kelamin'] ?> </center> </td>
         <td> <center> <?php echo $row['alamat'] ?> </center> </td>
         <td> <center> <?php echo $row['nama_ortu'] ?> </center> </td>
         <td> <center> <?php echo $row['nomor'] ?> </center> </td>
         <td> <center> <?php echo $row['asal'] ?> </center> </td>
         <td>
           <a href="edit-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>
</div> </div></div>
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
        <a href="input-mahasiswa.php" class="btn btn-primary">back </a>
        <a href="logout.php" class="btn btn-primary">logout </a>

</body>
</html>