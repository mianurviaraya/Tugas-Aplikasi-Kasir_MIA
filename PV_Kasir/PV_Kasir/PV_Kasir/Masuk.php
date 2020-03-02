<?php 
include_once 'Core/init.php'; 
include_once 'templates/header.php'; 
if (Session::Cek('username')) {
    Redirect::To('Kasir/index');
}
if(Session::Cek('Masuk')){
    echo "<li>".Session::Flash('Masuk')."</li>";
}
?>
<link rel="Stylesheet" type="text/css" href="templates/style.css">
<div class="kotak_login">
<h3 class="tulisan_login">Masuk Akun Administrasi Kasir</h3>
<form action="Masuk.php" method="post">
    <label for="Username">Username</label><br>
    <input class="form_login"type="text" name="username" id="Username"><br>
    <label for="Password">Password</label><br>
    <input class="form_login" type="password" name="password" id="Username"><br>
    <input class="tombol_login" type="submit" name="submit" value="Masuk Sekarang">
</form>
    <a href="index.php">Kembali</a>
</div>
<?php 
    if (Session::Cek('DFUsername')) {
        echo '<li>'.Session::Flash('DFUsername').'</li>';
    }
    
    
?>

<?php include_once 'Templates/Footer.php';

if (Input::Get('submit')) {
    if ($USER->Cek_Username(Input::Get('username'))&& !empty(Input::Get('username'))) {
        if ($USER->login_user(Input::Get('username'), Input::Get('password')) ) {
            Session::Set('username', Input::Get('username'));
            if ($USER->CekUser(Input::Get('username'))) {
                Session::Set('UA', 1);
            }
            Session::Flash('Login', 'Selamat Datang Kembali');
            Redirect::To('Kasir/index');
        }
        else {
            Session::Flash('DFUsername', "Password Anda Salah");
        }
    }else {
        Session::Flash('DFUsername', "Username anda belum terdaftar");
    }
}

?>