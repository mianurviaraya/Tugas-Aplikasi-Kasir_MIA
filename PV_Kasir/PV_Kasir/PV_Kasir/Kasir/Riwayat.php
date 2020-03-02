<?php include_once 'Core/init.php'; include_once '../Templates/Header.php'; include_once 'Template/header.php';
if (!Session::Cek('username')) {
    Redirect::To('../index');
    Session::Flash('Login','Anda Harus Login Terlebih Dahulu');
}

?>
<link rel="stylesheet" type="" href="../templates/style.css">
<div class="kotak_pesanan">
<h3 class="tulisan_login">Riwayat</h3>
<table>
<tr>
    <td class="form_pesanan">No</td>
    <td class="form_pesanan">Admin</td>
    <td class="form_pesanan">Total</td>
    <td class="form_pesanan">Tanggal</td>
</tr>

<?php 
$total = 0;
$riwayat = $PRODUK->get_produk('riwayat');
while ($data = mysqli_fetch_array($riwayat)) { ?>
<tr>
<td><?php echo $data['no_pesanan'] ?> </td>
<td><?php echo $data['admin_pesanan'] ?> </td>
<td><?php echo $data['total_pesanan'] ?> </td>
<td><?php echo $data['tanggal_pesanan'] ?> </td>
<?php $total +=$data['total_pesanan']?> 

</tr>

<?php }
    echo "Total Penjualan : " . $total;
?>

</table>
</div>





<?php include_once '../Templates/Footer.php';?>