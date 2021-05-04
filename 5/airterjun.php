  <?php

    include 'koneksi2.php';
    include 'rupiah.php';
?>
<!DOCTYPE html>
<html>
<head>

	<title>E-Holiday Kediri City</title>
	<link rel="stylesheet" type="text/css" href="airterjun.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

</head>
<body>

	<header>
		<div class="nav">
			<h2 class="logo"><span>Pa</span>ge</h2>
			<ul>
				<li><a href="index.html">Beranda</a></li>
				<li class="sub-nav">
				<a href="#">Destinasi Wisata</a>
				</li>
				<li><a href="tentang.html">Tentang</a></li>
				</div>
			</ul>
		</div>	
		</div>
	
	<div class="main">
			<div class="text">
				<h1><span>Destinasi Wisata</span></h1>
				<p>Explore Kediri City with us</p>
				<div class="active">
					<a href="#home" class="btnone">Learn more</a>
				</div>
			</div>
		</div>
		
	
	</div>
	</header>
	<br>
      <?php
            $no=0;
            $result = mysqLi_query($koneksi2,"SELECT * FROM tbdetailwisata ORDER BY id ASC");
            while($row = mysqli_fetch_array($result)){
                $no++
            ?>
	<div class="wrapper">
		<section id="home">
			<div class="kolom">
				<h1>
					<?php echo $row['nm_wisata'];?>
				</h1>
				<br>
				<td><?php echo $row['deskripsi'];?></td>
				<pre>Kategori   	:	<?php echo $row['kategori'];?></pre>
				<pre>Lokasi     	:	<?php echo $row['lokasi'];?></pre>
				<pre>Harga Tiket	:	<?php echo rupiah($row['harga']);?></pre>

			</div>
		</section>
	</div>
	
   
    <?php } ?>  
	</div>
    </div>
    </div>
  </div>
  <body>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
	
</body>
</html>