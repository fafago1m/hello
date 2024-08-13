<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Produk</title>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
      }

      .container {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
      }

      .swiper-container {
        width: 100%;
        height: 300px;
      }

      .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .product-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }

      .product {
        width: calc(50% - 20px);
        margin: 10px;
        box-sizing: border-box;
      }

      .product img {
        width: 100%;
        height: auto;
        cursor: pointer;
      }

      #order-form {
        width: 100%;
        margin-top: 20px;
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
        border-radius: 10px;
      }

      #order-form label {
        display: block;
        width: 100%;
        margin-bottom: 10px;
      }

      #order-form input,
      #order-form select {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 2px solid #ccc;
        border-radius: 4px;
      }

      #order-form button {
        width: 90%;
        background-color: #008cba;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      #order-form button:hover {
        background-color: #45a049;
      }

      .popup {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
      }

      .popup-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
      }

      .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
      }

      @media screen and (max-width: 768px) {
        .product {
          width: calc(100% - 20px);
        }

        #order-form input,
        #order-form select {
          width: calc(100% - 20px);
        }
      }
    </style>
  </head>
  <body>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/images/home.png" alt="Slider Image 1" />
        </div>
        <div class="swiper-slide">
          <img src="slider_image_2.jpg" alt="Slider Image 2" />
        </div>
        <div class="swiper-slide">
          <img src="slider_image_3.jpg" alt="Slider Image 3" />
        </div>
      </div>
    </div>

    <div class="container">
      <button class="tutorial-btn">Tutorial Pemesanan</button>
    </div>

    <div class="container">
      <div class="product-container">
        <div class="product">
          <button class="product-btn" data-name="Produk A" data-price="100">
            <img src="/images/hosting.png" alt="Produk A" />
          </button>
        </div>
        <div class="product">
          <button class="product-btn" data-name="Produk B" data-price="200">
            <img src="produk_b.jpg" alt="Produk B" />
          </button>
        </div>
        <div class="product">
          <button class="product-btn" data-name="Produk C" data-price="300">
            <img src="produk_c.jpg" alt="Produk C" />
          </button>
        </div>
      </div>
    </div>

    <div id="popup" class="popup">
      <div class="popup-content">
        <span class="close">&times;</span>
        <p>Ini adalah tutorial pemesanan.</p>
      </div>
    </div>

    <form id="order-form" method="GET">
      <h2>Formulir Pemesanan</h2>
      <label for="product-name">Nama Produk:</label>
      <input type="text" id="product-name" name="product-name" readonly />
      <label for="product-price">Harga:</label>
      <input type="text" id="product-price" name="product-price" readonly />
      <label for="payment-method">Metode Pembayaran:</label>
      <select id="payment-method" name="payment-method">
        <option value="transfer-bank">Transfer Bank</option>
        <option value="kartu-kredit">Kartu Kredit</option>
        <option value="e-wallet">E-Wallet</option>
      </select>
      <button type="button" onclick="sendWhatsApp()">Pesan via WhatsApp</button>
    </form>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".swiper-container", {
        loop: true,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false,
        },
      });
      function sendWhatsApp() {
        const productName = document.getElementById("product-name").value;
        const productPrice = document.getElementById("product-price").value;
        const paymentMethod = document.getElementById("payment-method").value;
        const whatsappURL =
          "https://wa.me/6281234567890/?text=Halo! Saya ingin memesan " +
          productName +
          " dengan harga " +
          productPrice +
          " menggunakan " +
          paymentMethod +
          ".";

        window.open(whatsappURL);
      }
      document.addEventListener("DOMContentLoaded", function () {
        const productButtons = document.querySelectorAll(".product-btn");
        const productNameInput = document.getElementById("product-name");
        const productPriceInput = document.getElementById("product-price");

        productButtons.forEach(function (button) {
          button.addEventListener("click", function () {
            const productName = button.dataset.name;
            const productPrice = button.dataset.price;

            productNameInput.value = productName;
            productPriceInput.value = productPrice;
          });
        });

        const tutorialBtn = document.querySelector(".tutorial-btn");
        const popup = document.getElementById("popup");
        const closeBtn = document.querySelector(".close");

        tutorialBtn.addEventListener("click", function () {
          popup.style.display = "block";
        });

        closeBtn.addEventListener("click", function () {
          popup.style.display = "none";
        });
      });
    </script>
  </body>
</html>
