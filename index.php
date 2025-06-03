<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - WWW.MALASNGODING.COM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php 
    $message = '';
    $message_class = 'error'; // default
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            $message = "Login gagal! Username dan password salah!";
            $message_class = 'error';
        } else if($_GET['pesan'] == "logout"){
            $message = "Anda telah berhasil logout";
            $message_class = 'success';
        } else if($_GET['pesan'] == "belum_login"){
            $message = "Anda harus login untuk mengakses halaman admin";
            $message_class = 'warning';
        }
    }
    ?>

    <form method="post" action="cek_login.php">
        <?php if($message != ''): ?>
            <div class="message <?php echo $message_class; ?>"><?php echo $message; ?></div>
        <?php endif; ?>

        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukkan password"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="LOGIN"></td>
            </tr>
        </table>			
    </form>
</body>
</html>
