<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaksi Berhasil</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #00c6ff, #0072ff);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #fff;
    }

    .card {
      background: #fff;
      color: #333;
      padding: 40px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      animation: fadeIn 1.2s ease-in-out;
    }

    .card h1 {
      font-size: 2em;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 1.2em;
      margin-bottom: 30px;
    }

    .checkmark {
      font-size: 60px;
      color: #28a745;
      animation: pop 0.5s ease forwards;
    }

    .btn {
      display: inline-block;
      padding: 12px 25px;
      background: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    .btn:hover {
      background: #0056b3;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(30px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes pop {
      0% { transform: scale(0); }
      100% { transform: scale(1); }
    }
  </style>
</head>
<body>
  <div class="card">
    <div class="checkmark">✔️</div>
    <h1>Berhasil!</h1>
    <p>Transaksi kamu telah selesai.</p>
    <a href="index.php" class="btn">Kembali ke Beranda</a>
  </div>
</body>
</html>
