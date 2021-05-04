<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Admin</title>
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
                <li><a href="admin.php"><i class="fas fa-home"></i>Data Admin</a></li>
                <li><a href="datawisata1.php"><i class="fas fa-plane"></i>Data Wisata</a></li>
                <li><a href="index.html"><i class="fas fa-layer-group"></i>Web Front</a></li>
                <li><a href="index.html"><i class="fas fa-power-off"></i>Logout</a></li>
            </ul> 
        </div>
    <div class="main_content">
        <div class="header">SELAMAT DATANG ADMIN</div>  
        <div class="info">
            <h1>Data Admin</h1>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-warning">
                        <th>No</th>
                        <th>Nama Admin</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 0;
                $result = mysqli_query($koneksi, "SELECT * FROM tbregister ORDER BY email ASC");
                while($row = mysqli_fetch_array($result)) {
                    $no++
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
        </div>
    </div>
</div>
</body>
</html>