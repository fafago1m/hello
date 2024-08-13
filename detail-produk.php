<?php 
	error_reporting(0);
	include 'db.php';
	$testi = mysqli_query($conn, "SELECT testimoni, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($testi);

	$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD ADMIN ACT</title>

    <link rel="stylesheet" href="/fafastore/css/fafa.css">
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
        >Act Website.<span class="animate" style="--i: 1"></span
      ></a>

      <div class="bx bx-menu" id="menu-icon">
        <span class="animate" style="--i: 1"></span>
      </div>

      <nav class="navbar">
        <a href="index.php" >Kembali</a>
        <a href="#store" class="active">Info Produk</a>

        <span class="active-nav"></span>
        <span class="animate" style="--i: 2"></span>
      </nav>
    </header>

	</div>
    <section>
	<!-- product detail -->
	<div class="section">
		<div class="container">
			<h3>Detail Produk</h3>
			<div class="box">
				<div class="postt">
					<img src="produk/<?php echo $p->product_image ?>" width="300px">
				</div>
				<div class="peme">
					<h3><?php echo $p->product_name ?></h3>
					<h1>Deskripsi :</h1>
					<p class="kont"><?php echo $p->product_description ?></p>
					<p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->testimoni ?>&text=Hai, saya tertarik dengan produk Anda." target="_blank">
						Hubungin via Whatsapp
						<img src="img/wa.png" width="50px"></a>
					</p>
				</div>
				<div class="popup" id="popup">
        <span class="close"><i class='bx bxs-x-circle'></i></span>
        <img src="https://via.placeholder.com/50" alt="Product Image"> 
        <h2>Order Produk ActStore</h2>
        <form class="orderForm">
          <input type="hidden" id="productName" name="productName">
          <div>
            <label for="price">Pilih Produk:</label>
            <select id="price" name="price">
              <option value="">Pilih Produk Item</option>
			  <option value="Review10K" >Jasa Review Antri - 10k</option>
              <option value="ReviewFast20K" >Jasa Review Fast - 20k</option>
              <option value="Review10K" >Host 1gb - 3k</option>
              <option value="ReviewFast20K" >Host 2gb - 5k</option>
            </select>
          </div>
          <div>
            <label for="payment">Pilih Metode Pembayaran:</label>
            <select id="payment" name="payment">
              <option value="">Select Metode Pembayaran</option>
              <option value="dana" >Dana</option>
              <option value="qris" >QRIS</option>
            </select>
          </div>
          <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Tulis pesan..."></textarea>
          </div>
          <button type="submit">Beli Sekarang</button>
        </form>
      </div>
    </div>
			</div>
		</div>
	</div>
	
	</section>
<style>
.container h3 {
	box-sizing: border-box;
	color: white;
	font-weight: bold;
	text-align: center;
	padding: 10px;
	font-size: 3rem;
}
.postt img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 5px;
}

.peme h3 {
	padding: 5px;
    font-weight: bold;
    color: white;
    font-size: 3rem;
}

.box {
	background-color: #3d0035;
	border:2px solid #000;
	padding:15px;
	box-sizing: border-box;
    display: block;
	margin-left: auto;
	margin-right: auto;
	border-radius: 20px;
}

.kont {
	text-align: left;
    font-weight: bold;
    color: white;
    font-size: 2rem;
}

</style>
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