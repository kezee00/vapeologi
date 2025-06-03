<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produk Vape | Vapeologi</title>
 <style>
    body {
  font-family: 'Segoe UI', sans-serif;
  background: #f5f5f5;
  padding: 30px;
  margin: 0;
}

.tabs {
  display: flex;
  gap: 20px;
  justify-content: center;
  margin-bottom: 30px;
}
.mod{
  color: #000;
   text-decoration: none;
}
.tabs button {
  padding: 10px 30px;
  border: none;
  border-radius: 10px;
  font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  background: #fff;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.tabs button.active {
  background-color: #d946ef;
  color: white;
}

.produk-container {
  display: flex;
  gap: 25px;
  justify-content: center;
  flex-wrap: wrap;
}

.produk-card {
  background-color: white;
  padding: 20px;
  width: 200px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  text-align: center;
}

.produk-card img {
  width: 100px;
  height: auto;
  margin-bottom: 10px;
}

.produk-card .rating {
  text-align: left;
  font-size: 14px;
  color: #ff9900;
  margin-bottom: 10px;
}

.produk-card h3 {
  font-size: 18px;
  margin: 10px 0 5px 0;
}

.beli {
  background-color: #d946ef;
  border: none;
  padding: 10px;
  width: 100%;
  margin-top: 10px;
  cursor: pointer;
  font-weight: bold;
  transition: all ease 0.3s;
}
.beli:hover{
  background-color: #000;
  border: 1px solid #d946ef;
}
.sekarang{
   text-decoration: none;
   color: #fff;
}

 </style>
</head>
<body>
  <div class="tabs">
    <button> <a href="index.php" class="mod">🔋 Mod</a></button>
    <button class="active">🧴 Liquid</button>
  </div>

  <div class="produk-container">
    <div class="produk-card">
      <div class="rating">⭐ 4.5/5</div>
      <img src="WhatsApp_Image_2025-05-17_at_14.28.21__1_-removebg-preview.png" alt="SMOK Nord 5" />
      <h3>ARCTIC WAVE</h3>
      <p><strong>IDR. 200.000</strong></p>
      <button class="beli"> <a href="smok.php" class="sekarang">Beli Sekarang</a></button>
    </div>

    <div class="produk-card">
      <div class="rating">⭐ 4.5/5</div>
      <img src="vanilla.png" alt="Voopoo Drag X" />
      <h3>VANILLA</h3>
      <p><strong>IDR. 399.000</strong></p>
      <button class="beli"> <a href="VANILLA.php" class="sekarang">Beli Sekarang</a></button>
    </div>

    <div class="produk-card">
      <div class="rating">⭐ 4.5/5</div>
      <img src="caramel.png" alt="Uwell Caliburn G2" />
      <h3>CARAMEL</h3>
      <p><strong>IDR. 111.000</strong></p>
       <button class="beli"> <a href="caramel.php" class="sekarang">Beli Sekarang</a></button>
    </div>
  </div>
</body>
</html>
