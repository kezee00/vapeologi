<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
   <div class="logo">
    <img src="logo.png" alt="">
   </div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#produk">Product</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
    <a href="loguot.php" class="login-button">Loguot</a>
  </header>

  <main>
    <div class="content">
      <h1>Selamat Datang<br>di Website<br><span class="highlight">Vapeologi</span></h1>
      <div class="buttons">
        <a href="#produk" class="btn grey">Explore Menu</a>
        <a href="#" class="btn outlined">Buy Products</a>
      </div>
    </div>
    <div class="image">
      <img src="vape.png" alt="Vape Image" />
    </div>
  </main>
  <section class="section_container" id="produk">
        <h2>Produk Vape</h2>
        <div class="tabs">
      <button class="active">🔋 Mod</button>
      <button> <a href="produk.php" class="liquid">🧴 Liquid</a></button>
    </div>
        <div class="content-produk">
            <div class="card">
               <div class="rating">⭐ 4.5/5</div>
                <img src="vv.png"
                    alt="Vape 1">
                <div class="info-produk">
                    <h2>SMOK Nord 5</h2>
                    <p>IDR. 650.000</p>
                    <a href="mod1.php" class="cta">Beli Sekarang</a>
                </div>
            </div>
            <div class="card">
              <div class="rating">⭐ 4.5/5</div>
                <img src="produk2.png"
                    alt="Vape 1">
                <div class="info-produk">
                    <h2>Uwell Caliburn G2</h2>
                    <p>IDR. 700.000</p>
                    <a href="mod3.php" class="cta">Beli Sekarang</a>
                </div>
            </div>
            <div class="card">
              <div class="rating">⭐ 4.5/5</div>
                <img src="drak.png"
                    alt="Vape 1">
                <div class="info-produk">
                    <h2>Voopoo Drag X</h2>
                    <p>IDR. 890.000</p>
                    <a href="mod2.php" class="cta">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </section>
  <section class="about-section" id="about">
    <div class="image-kiri">
      <img src="WhatsApp_Image_2025-05-19_at_09.58.40-removebg-preview.png" alt="Vape Smoke" />
    </div>

    <div class="konten-tengah">
      <h2>About</h2>

      <div class="blok">
        <h3>about-us</h3>
        <p>
          Selamat datang di Vapeologi tempat Anda menemukan produk terbaik untuk kebutuhan Anda.
          Kami berkomitmen untuk menyediakan produk berkualitas tinggi dengan layanan pelanggan yang luar biasa.
        </p>
      </div>

      <div class="blok">
        <h3>Sejarah Kami</h3>
        <p>
          Didirikan pada tahun 2024, Vapeologi telah berkembang menjadi salah satu toko online terkemuka di industri
          ini.
          Kami berawal dari toko kecil dan terus berkembang dengan dukungan pelanggan setia kami.
        </p>
      </div>
    </div>

    <div class="konten-kanan">
      <div class="blok">
        <h3>Misi Kami</h3>
        <p>
          Misi kami adalah memberikan pengalaman belanja online yang mudah, aman, dan menyenangkan
          dengan produk-produk yang terjangkau dan berkualitas.
        </p>
      </div>

      <img src="WhatsApp Image 2025-05-27 at 08.49.52.jpeg" alt="Founder Vapeologi" class="circle-image" />
    </div>
  </section>
  <h2>Contact</h2>
  <section class="contact-section" id="contact">
    <div class="contact-container">
      <div class="contact-left">
        <p><img src="email.png" alt="email" class="icon"> kholidafflaha11@gmail.com</p>
        <p><img src="tlpn.png" alt="phone" class="icon"> 081212*****</p>
        <p><img src="ig.png" alt="instagram" class="icon">@pttydex</p>
      </div>
      <div class="divider"></div>
      <div class="contact-right">
        <p>
          Kami selalu siap membantu Anda!<br>
          Jika Anda memiliki pertanyaan, masukan, atau membutuhkan bantuan,<br>
          jangan ragu untuk menghubungi kami.
        </p>
      </div>
    </div>
  </section>
  <footer class="footer">
    <p>© 2024 Kholid afflaha. All rights reserved</p>
  </footer>
</body>

</html>