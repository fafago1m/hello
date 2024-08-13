<?php 
	include 'db.php';
	$testi = mysqli_query($conn, "SELECT testimoni, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($testi);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ACT STORE</title>

    <link rel="stylesheet" href="main.css" />
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
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#store">Store</a>
        <a href="#contact">Contact</a>
        <a href="dashboard.php">Login</a>

        <span class="active-nav"></span>
        <span class="animate" style="--i: 2"></span>
      </nav>
    </header>

    <section class="home show-animate" id="home">
      <div class="home-content">
        <h1>
          Wel<span>come</span><span class="animate" style="--i: 3"></span>
        </h1>
        <div class="text-animate">
          <h3>Di Act Store</h3>
          <span class="animate" style="--i: 4"></span>
        </div>
        <p>
          Di buat oleh seorang fafa.<span class="animate" style="--i: 5"></span>
        </p>

        <div class="btn-box">
          <a href="#" class="btn">WA</a>
          <a href="#" class="btn">GRUP</a>
          <span class="animate" style="--i: 6"></span>
        </div>
      </div>

      <div class="home-sci">
        <a href="#"><i class="bx bx-coffee-togo"></i></a>
        <a href="#"><i class="bx bx-coffee-togo"></i></a>
        <a href="#"><i class="bx bx-coffee-togo"></i></a>
        <span class="animate" style="--i: 6"></span>
      </div>

      <div class="home-imgHover"></div>
      <span class="animate home-img" style="--i: 4"></span>

   
    <div id="overlay2" class="overlay">
        <div class="popup">
            <button class="close-btn" onclick="closePopup('overlay2')">Tutup</button>
            <img src="another_logo.png" alt="Another Logo">
            <h2>Selamat datang di Website Kami!</h2>
            <p>Ingin melihat konten lainnya? Klik tombol di bawah ini!</p>
            <a href="https://www.example.com" target="_blank" class="subscribe-btn">Lihat Konten</a>
        </div>
    </div>
    
    </section>

    <section class="about" id="about">
      <h2 class="heading">
        Testimoni <span>Store</span
        ><span class="animate scroll" style="--i: 1"></span>
      </h2>

      <div class="about-img">
        <img src="images/about.png" alt="" />
        <span class="circle-spin"></span>
        <span class="animate scroll" style="--i: 2"></span>
      </div>

      <div class="about-content">
        <h3>Act Store<span class="animate scroll" style="--i: 3"></span></h3>
        <p>
          Store Kami Memiliki Testimoni 300+ jika ingin melihat testi cek
          instagram kami .<span class="animate scroll" style="--i: 4"></span>
        </p>

        <div class="btn-box btns">
          <a href="https://www.instagram.com/_actshop" class="btn">FOLLOW !!</a>
          <span class="animate scroll" style="--i: 5"></span>
        </div>
      </div>
    </section>

    <section class="store" id="store">
      <div class="ttt">
        <h2>LIST PRODUK <span class="animate scroll" style="--i: 1"></span></h2>
      </div>

      <div>
          <div class="colll">
          <?php 
					$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
					if(mysqli_num_rows($produk) > 0){
						while($p = mysqli_fetch_array($produk)){
				?>	
           <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
						<div class="col">
            <span class="animate scroll" style="--i: 2"></span>
              <div class="coll">
							<img class="img" src="produk/<?php echo $p['product_image'] ?>">
							<h3 class="nama"><?php echo substr($p['product_name'], 0, 30) ?></h3>
							<p class="harga">Rp.<?php echo number_format($p['product_price']) ?></p>
              <button>BELI</button>
						</div>
            </div>
					</a>
            <?php }}else{ ?>
					<p>Produk tidak ada</p>
				<?php } ?>
          </div>
        </div>
    

    </section>

    <section class="testi" id="testi">
      <div class="maindiv">
        <div class="ttt">
          <h2>FOLLOW ME!!</h2>
        </div>

        <video class="myvidio" id="myvidio" controls autoplay muted>
          <source src="vidio/Proyek Baru 3 [8651310].mp4" type="video/mp4" />
        </video>
        <div class="ttt">
          <p><span style="color: red">Note:</span>Vidio auto play</p>
          <p><span style="color: #00d7e6">Thx yang udah follow</span></p>
        </div>
      </div>
        <section>

        

        </section>


      <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
      ></script>
      <script
        nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
      ></script>
    </section>
    <section>
      <div class="ttt">
        <h2>Dalam Proses <span>Pembuatan</span> Fafa Store</h2>
      </div>
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

    <script src="js/script.js"></script>
  </body>
</html>
