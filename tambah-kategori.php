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
        <a href="data-kategori.php" class="active">Kategori</a>
        <a href="data-produk.php">Data Produk</a>
		<a href="keluar.php">Kembali</a>

        <span class="active-nav"></span>
        <span class="animate" style="--i: 2"></span>
      </nav>
    </header>

    <section>
	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Tambah Data Kategori</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php 
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (
											null,
											'".$nama."') ");
						if($insert){
							echo '<script>alert("Tambah data berhasil")</script>';
							echo '<script>window.location="data-kategori.php"</script>';
						}else{
							echo 'gagal '.mysqli_error($conn);
						}

					}
				?>
			</div>
		</div>
	</div>
    </section>
	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2020 - Bukawarung.</small>
		</div>
	</footer>
</body>
</html>