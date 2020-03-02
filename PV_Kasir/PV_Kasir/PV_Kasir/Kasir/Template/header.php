<?php include_once 'core/init.php';
?>  

<h3>Admin <?= Session::get('username');?></h3>
<div class="garis_panjang">
<a href="Pesanan.php" class="btn btn-secondary">Pesanan</a>
<a class="btn btn-secondary" href="Keranjang.php">Keranjang</a>
<a class="btn btn-secondary" href="Riwayat.php">Riwayat</a>
<?php if (Session::Cek('UA')) { ?>

<a class="btn btn-secondary" href="Tambah.php">Tambah Produk</a> 

<?php } ?>
<a class="btn btn-secondary" href="logout.php">Logout</a>
</div>









