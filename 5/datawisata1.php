<?php
include 'koneksi2.php';
include 'rupiah.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Wisata</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>E-Holiday</h2>
            <ul>
                <li><a href="admin.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="dataAdmin.php"><i class="fas fa-home"></i>Data Admin</a></li>
                <li><a href="datawisata1.php"><i class="fas fa-plane"></i>Data Wisata</a></li>
                <li><a href="index.html"><i class="fas fa-layer-group"></i>Web Front</a></li>
                <li><a href="index.html"><i class="fas fa-power-off"></i>Logout</a></li>
            </ul> 
        </div>
    <div class="main_content">
        <div class="header">SELAMAT DATANG ADMIN</div>  
        <div class="info">
            <h1>Data Wisata</h1><br>
                    <a href="inputData.php" type="button" class="btn btn-warning">Tambah Data Wisata</a>
                        <table class="table table-bordered">
                        <thead>
                        <tr class="table-warning">
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th style="width: 35%;">Deskripsi</th>
                        <th>Kategory</th>
                        <th>Lokasi</th>
                        <th>Harga Tiket</th>
                        <th>Foto</th>
                        <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $no = 0;
                        $result = mysqli_query($koneksi2, "SELECT * FROM tbdetailwisata ORDER BY id ASC");
                        while($row = mysqli_fetch_array($result)) {
                            $no++
                        ?>
                        <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row['nm_wisata'];?></td>
                        <td><?php echo $row['deskripsi'];?></td>
                        <td><?php echo $row['kategori'];?></td>
                        <td><?php echo $row['lokasi'];?></td>
                        <td><?php echo rupiah($row['harga']);?></td>
                        <td>
                            <img src="image/<?php echo $row['foto'];?>"
                            border = "0" width = "100px" height = "100px"/>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-warning" > Edit </a>
                            <a href="hapus.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-danger"> Hapus </a>
                        </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        </table>
        </div>
    </div>
</div>
</body>
</html>