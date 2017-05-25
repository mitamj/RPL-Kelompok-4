<section class="content-header">
    <h1>Edit<small>Data Produk</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_produk'])) {
	$id_produk = $_GET['id_produk'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$tampilPed	= mysql_query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
	$hasil	= mysql_fetch_array ($tampilPed);
//		$notreg	=$hasil['reg_ped'];
				
	if ($_POST['edit'] == "edit") {
		$id_produk		=$_POST['id_produk'];
		$nama		=$_POST['nama'];
		$harga		=$_POST['harga'];
		$tgl_harga		=$_POST['tgl_harga'];
		$kategori		=$_POST['kategori'];
		
//		$cekreg	=mysql_num_rows (mysql_query("SELECT reg_ped FROM tb_produk WHERE reg_ped='$_POST[reg_ped]' AND reg_ped!='$notreg'"));
//		if($cekreg > 0) {
//		echo "<div class='register-logo'><b>Oops!</b> No. REG Not Available</div>
//			<div class='box box-primary'>
//				<div class='register-box-body'>
//					<p>Harap periksa kembali dan pastikan No. REG Produk yang Anda masukan benar</p>
//					<div class='row'>
//						<div class='col-xs-8'></div>
//						<div class='col-xs-4'>
//							<button type='button' onclick=location.href='home-admin.php?page=form-view-data-produk' class='btn btn-block btn-warning'>Back</button>
//						</div>
//					</div>
//				</div>
//			</div>";
//		}
//		else{
		if{
		$update= mysql_query ("UPDATE tb_produk SET id_pasar='$id_pasar', kioslos='$kioslos', luas_kl='$luas_kl', reg_ped='$reg_ped', tgl_reg='$tgl_reg', status='$status', dagangan='$dagangan', nama='$nama', tempat_lhr='$tempat_lhr', tgl_lhr='$tgl_lhr', alamat='$alamat', telp='$telp', ket='$ket' WHERE id_produk='$id_produk'");
		if($update){
			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Edit Data Produk ".$id_produk." Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-produk' class='btn btn-danger btn-block'>Next >></button>
							</div>
						</div>
					</div>
				</div>";
		}
		else {
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
		}
		}
	}
?>
</div>