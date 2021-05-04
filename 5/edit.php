<?php
error_reporting(0);
include 'koneksi2.php';
if (isset($_GET["id"])) {
    $id = ($_GET["id"]);

    $result = mysqli_query($koneksi2, "SELECT * FROM tbdetailwisata WHERE id = '$id'");

    while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $nm_wisata = $row['nm_wisata'];
        $deskripsi = $row['deskripsi'];
        $kategori = $row['kategori'];
        $lokasi = $row['lokasi'];
        $harga = $row['harga'];
        $foto = $row['foto'];
    }

} else {
    header("location:dataWisata.php");
        }

?>
<!DOCTYPE html>
<head>
    <title>Edit Data Wisata</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="conteiner" style="margin-left: 300px; margin-right: 300px;">
        <h2 class="alert alert-warning text-center mt-5">DATA WISATA</h2>

        <form action="prosesEditData.php" method="post" enctype="multipart/form-data" name= "form1" id="form1">
            <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="id" value="<?php echo $id; ?>"/>
            </div>
            
            <div class="form-group">
                <label>Nama Tempat Wisata</label>
                <input type="text" class="form-control" name="nm_wisata" value="<?php echo $nm_wisata; ?>"/>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="textarea" class="form-control" name="deskripsi" value="<?php echo $deskripsi; ?>">
            </div>
            
            <div class="form-group">
                <label>Kategory</label>
                <select class="form-select" name="kategori">
                    <option value="">Pilih Kategory</option>
                    <option value="Air Terjun" <?php if ($kategori == 'Air Terjun') echo ' selected = "selected"'; ?>/>Air Terjun</option>
                    <option value="Candi" <?php if ($kategori == 'Candi') echo ' selected = "selected"'; ?>/>Candi</option>
                    <option value="Gunung" <?php if ($kategori == 'Gunung') echo ' selected = "selected"'; ?>/>Gunung</option>
                    <option value="Taman" <?php if ($kategori == 'Taman') echo ' selected = "selected"'; ?>/>Taman</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>Lokasi</label>
                <input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi; ?>"/>
            </div>

            <div class="form-group">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>"/>
            </div>
            
            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" id="foto" name="foto" value="<?php echo $foto; ?>">
            </div>
                
                <button type="submit" class="btn btn-success" name="edit" value="Submit" style="margin-top: 20px;">EDIT</button>
                
        </form>
    </div>


</body>
</html>