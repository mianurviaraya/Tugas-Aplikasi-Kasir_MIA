<?php include_once 'Core/init.php'; include_once 'templates/header.php'; 
    if (Session::Cek('username')) {
        Redirect::To('Kasir/index');
    }
    if (Session::Cek('Login')) {
        echo "<li>".Session::Flash('Login')."</li>";
    }
?>
<link rel="stylesheet" type="text/css" href="templates/style.css">
<h3 class="tulisan_judul">Selamat Datang di Aplikasi Kasir</h3>
<div class="kotak_login">
<h4 class="tulisan_login">Silahkan Verifikasi Email</h4>
    <form action="index.php" method="post">
        <input class="form_login" type="email" name="email"><br>
        <input class="tombol_login" type="submit" value="Cek Email" name="submit">
        </div>
    </form>
<?php 
include_once 'templates/footer.php';
if (Input::Get('submit')) {
        if(!($USER->Cek_Email(Input::Get('email')))){
            Session::Flash('Daftar', "Email anda belum terdaftar, Silahkan Daftar");
            Redirect::To('Daftar');
        }else {
            Session::Flash('Masuk', "Email anda sudah terdaftar, Silahkan Login");
            Redirect::To('Masuk');
        }
    }
    
?>