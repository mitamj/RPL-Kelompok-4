<section class="content-header">
    <h1>Edit<small>Data Kategori</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_kat'])) {
	$id_kat = $_GET['id_kat'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$tampilPed	= mysql_query("SELECT * FROM tb_kategori WHERE id_kat='$id_kat'");
	$hasil	= mysql_fetch_array ($tampilPed);
		
	if ($_POST['edit'] == "edit") {
		$nama			=$_POST['nama'];
		
//		$cekreg	=mysql_num_rows (mysql_query("SELECT reg_ped FROM tb_kategori WHERE reg_ped='$_POST[reg_ped]' AND reg_ped!='$notreg'"));
//		if($cekreg > 0) {
//		echo "<div class='register-logo'><b>Oops!</b> No. REG Not Available</div>
//			<div class='box box-primary'>
//				<div class='register-box-body'>
//					<p>Harap periksa kembali dan pastikan No. REG Kategori yang Anda masukan benar</p>
//					<div class='row'>
//						//<div class='col-xs-8'></div>
//						<div class='col-xs-4'>
//							<button type='button' onclick=location.href='home-admin.php?page=form-view-data-kategori' class='btn btn-block btn-warning'>Back</button>
//						</div>
//					</div>
//				</div>
//			</div>";
		}
		//else{
		$update= mysql_query ("UPDATE tb_kategori SET nama='$nama' WHERE id_kat='$id_kat'");
		if($update){
			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Edit Data Kategori ".$id_kat." Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-kategori' class='btn btn-danger btn-block'>Next >></button>
							</div>
						</div>
					</div>
				</div>";
		}
		else {
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
		}
		
	//}
?>
</div>