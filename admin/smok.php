<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>SMOK Nord 5</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  padding: 30px;
}

.product-container {
  display: flex;
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 6px 12px rgba(0,0,0,0.1);
  max-width: 1000px;
  margin: 0 auto;
  gap: 40px;
}

.product-image img {
  width: 250px;
  border-radius: 10px;
}

.product-details {
  flex: 1;
}

.rating {
  margin: 10px 0;
   display: flex;
  justify-content: space-between;
}

.star {
  color: orange;
  font-size: 20px;
}

.score {
  font-weight: bold;
  margin-left: 5px;
}

.reviews {
  color: #888;
  font-size: 14px;
}

.price {
  margin: 15px 0;
}

.original {
  text-decoration: line-through;
  color: #aaa;
  margin-right: 10px;
}

.discounted {
  font-size: 24px;
  color: #333;
  font-weight: bold;
}

.voucher {
  margin: 10px 0;
}

.voucher .orange {
  color: orange;
  font-weight: bold;
}

.shipping {
  margin: 10px 0;
}

.quantity {
  margin: 20px 0;
}

.quantity input {
  width: 40px;
  text-align: center;
}

.quantity button {
  padding: 4px 10px;
  margin: 0 5px;
}

.actions {
  display: flex;
  gap: 10px;
  margin-top: 20px;
}

.cart {
  background-color: #e0b6f5;
  color: purple;
  font-weight: bold;
  padding: 10px 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.buy {
  background-color: #aaa;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.share {
  margin-top: 20px;
  font-size: 14px;
}

.share a {
  margin-right: 10px;
  text-decoration: none;
  font-size: 18px;
}
.kembali{
  text-decoration: none;
}
.sekarang{
   text-decoration: none;
}

  </style>
</head>
<body>

<div class="product-container">
  <div class="product-image">
    <img src="WhatsApp_Image_2025-05-17_at_14.28.21__1_-removebg-preview.png" alt="SMOK Nord 5">
  </div>

  <div class="product-details">
    <h2>ARCTIC WAVE</h2>
    <div class="rating">
      <div class="rating01">
      <span class="star">★ ★ ★ ★ ☆</span>
      <span class="score">4.1</span>
      <span class="reviews">(38,8RB Penilaian)</span>
      </div>
       <button> <a href="produk.php" class="kembali">KEMBALI</a></button>
    </div>
    <div class="price">
      <span class="original">Rp:200.000</span>
      <span class="discounted">Rp:180.000</span>
    </div>

    <div class="voucher">Voucher Toko: <span class="orange">Rp2RB OFF</span></div>
    <div class="shipping">Pengiriman: 🚚 Gratis ongkir</div>

    <div class="quantity">
      Kuantitas: 
      <button>-</button>
      <input type="number" value="1" min="1">
      <button>+</button>
    </div>

    <div class="actions">
      <button class="cart"><a href="keranjang4.php" class="sekarang">Masukkan Keranjang</button>
      <button class="buy"><a href="keranjang4.php" class="sekarang">Beli Sekarang</button>
    </div>

    <div class="share">
      Share:
      <a href="#">🐦</a>
      <a href="#">📘</a>
      <a href="#">🟢</a>
      <span>♡ Favorit (43,2RB)</span>
    </div>
  </div>
</div>

</body>
</html>
