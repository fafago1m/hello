<?php 
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD ADMIN ACT</title>

    <link rel="stylesheet" href="/fafastore/css/fafa.css"/>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />

    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>

  <body oncontextmenu="return false">
    <header class="header">
      <a href="#" class="logo"
        >Act Admin.<span class="animate" style="--i: 1"></span
      ></a>

      <div class="bx bx-menu" id="menu-icon">
        <span class="animate" style="--i: 1"></span>
      </div>

      <nav class="navbar">
        <a href="dashboard.php">Dashboard</a>
        <a href="profil.php">Profile</a>
        <a href="data-kategori.php">Kategori</a>
        <a href="data-produk.php" class="active">Data Produk</a>
		<a href="keluar.php">Kembali</a>

        <span class="active-nav"></span>
        <span class="animate" style="--i: 2"></span>
      </nav>
    </header>

    <section>
	<div class="section">
		<div class="container">
			<h3>Data Produk</h3>
			<div class="boxa">
				
				<table cellspacing="0">
					<thead class="tab">
						<tr class="boxx">
							<th>No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){
							while($row = mysqli_fetch_array($produk)){
						?>
						<tr class="boxx">
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp.<?php echo number_format($row['product_price']) ?></td>
							<td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"> <img src="produk/<?php echo $row['product_image'] ?>"> </a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
							<td>
								<a class="tombol" href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a><a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
        <div class="data">
          <p><a href="tambah-produk.php">Tambah Data</a></p>
        </div>
			</div>
		</div>
	</div>

	</section>

    <section>
    <script src="js/script.js"></script>
	</section>

	<footer class="footer">
      <div class="waves">
        <div class="wave" id="wave1"></div>
        <div class="wave" id="wave2"></div>
        <div class="wave" id="wave3"></div>
        <div class="wave" id="wave4"></div>
      </div>
      <ul class="social-icon">
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </li>
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-whatsapp"></ion-icon>
          </a>
        </li>
        <li class="social-icon__item">
          <a class="social-icon__link" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
      </ul>
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
        <li class="menu__item"><a class="menu__link" href="#">About</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Testi</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Produk</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
      </ul>
      <p>&copy;2024 FafaGO1k | All Rights Reserved</p>
    </footer>
	
</body>
</html>