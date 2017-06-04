<section class="content-header">
    <h1>Edit<small>Data Pedagang</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_ped'])) {
	$id_ped = $_GET['id_ped'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$tampilPed	= mysql_query("SELECT * FROM tb_pedagang WHERE id_ped='$id_ped'");
	$hasil	= mysql_fetch_array ($tampilPed);
		$notreg	=$hasil['reg_ped'];
				
	if ($_POST['edit'] == "edit") {
		$id_pasar		=$_POST['id_pasar'];
		$kioslos		=$_POST['kioslos'];
		$luas_kl		=$_POST['luas_kl'];
		$reg_ped		=$_POST['reg_ped'];
		$tgl_reg		=$_POST['tgl_reg'];
		$status			=$_POST['status'];
		$dagangan		=$_POST['dagangan'];
		$nama			=$_POST['nama'];
		$tempat_lhr		=$_POST['tempat_lhr'];
		$tgl_lhr		=$_POST['tgl_lhr'];	
		$alamat			=$_POST['alamat'];
		$telp			=$_POST['telp'];
		$ket			=$_POST['ket'];
		
		$cekreg	=mysql_num_rows (mysql_query("SELECT reg_ped FROM tb_pedagang WHERE reg_ped='$_POST[reg_ped]' AND reg_ped!='$notreg'"));
		if($cekreg > 0) {
		echo "<div class='register-logo'><b>Oops!</b> No. REG Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. REG Pedagang yang Anda masukan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-view-data-pedagang' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$update= mysql_query ("UPDATE tb_pedagang SET id_pasar='$id_pasar', kioslos='$kioslos', luas_kl='$luas_kl', reg_ped='$reg_ped', tgl_reg='$tgl_reg', status='$status', dagangan='$dagangan', nama='$nama', tempat_lhr='$tempat_lhr', tgl_lhr='$tgl_lhr', alamat='$alamat', telp='$telp', ket='$ket' WHERE id_ped='$id_ped'");
		if($update){
			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Edit Data Pedagang ".$id_ped." Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-pedagang' class='btn btn-danger btn-block'>Next >></button>
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