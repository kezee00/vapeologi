<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Keranjang Saya</title>
 <style>
    body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f5f5f5;
  margin: 0;
  padding: 0;
  border: none;
  outline: none;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: white;
  padding: 20px 40px;
  border-bottom: 1px solid #ddd;
}

.logo img {
  height: 40px;
}

.title {
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 2px;
}

.user-icon {
  font-size: 24px;
}

main {
  padding: 40px;
}

h2 {
  margin-bottom: 30px;
}
.title{
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.cart-item {
  display: flex;
  align-items: center;
  background: white;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.cart-item img {
  width: 100px;
  margin-right: 20px;
}

.item-info {
  flex: 1;
}

.item-info h3 {
  margin: 0 0 10px 0;
}

.quantity {
  display: flex;
  align-items: center;
  gap: 5px;
}

.quantity input {
  width: 40px;
  text-align: center;
}

.quantity button {
  padding: 5px 10px;
}

.cart-total {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: none;
  margin-top: 20px;
}

.checkout {
  background-color: #bbb;
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 6px;
  cursor: pointer;
  font-weight: bold;
}
.sekarang{
    text-decoration: none;
    color: 000;
}
.back-link{
   text-decoration: none;
}
 </style>
</head>
<body>

<header>
  <div class="logo">
    <img src="logo.png" alt="Vapeologi">
  </div>
  <div class="title">VAPEOLOGI</div>
  <div class="user-icon">👤</div>
</header>

<main>
  <div class="title">
  <h2>Keranjang Saya</h2>
 <button> <a href="mod1.php" class="back-link">KEMBALI</a></button>
  </div>
  <div class="cart-item">
    <img src="vv.png" alt="SMOK Nord 5">
    <div class="item-info">
      <h3>SMOK Nord 5</h3>
      <p>RP. 10.000</p>
      <p><strong>Total: Rp. 10.000</strong></p>
    </div>
    <div class="quantity">
      <button>-</button>
      <input type="number" value="1" min="1">
      <button>+</button>
    </div>
  </div>

  <div class="cart-total">
    <p><strong>Total: Rp. 18.000</strong></p>
    <button class="checkout"><a href="berhasil.php" class="sekarang">Checkout</button>
  </div>
</main>

</body>
</html>
