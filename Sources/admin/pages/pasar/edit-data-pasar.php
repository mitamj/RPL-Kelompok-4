<section class="content-header">
    <h1>Edit<small>Data Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_pasar'])) {
	$id_pasar = $_GET['id_pasar'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$tampilPas	= mysql_query("SELECT * FROM tb_pasar WHERE id_pasar='$id_pasar'");
	$hasil	= mysql_fetch_array ($tampilPas);
		$notreg	=$hasil['no_reg'];
				
	if ($_POST['edit'] == "edit") {
	$no_reg			=$_POST['no_reg'];
	$nama			=$_POST['nama'];
	$status			=$_POST['status'];
	$kelas			=$_POST['kelas'];
	$lokasi			=$_POST['lokasi'];
	$tgl_berdiri	=$_POST['tgl_berdiri'];	
	$luas			=$_POST['luas'];
		
		$cekno	=mysql_num_rows (mysql_query("SELECT no_reg FROM tb_pasar WHERE no_reg='$_POST[no_reg]' AND no_reg!='$notreg'"));
		if($cekno > 0) {
		echo "<div class='register-logo'><b>Oops!</b> No. REG Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. REG Pasar yang Anda masukan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-edit-data-pasar&id_pasar=$id_pasar' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$update= mysql_query ("UPDATE tb_pasar SET no_reg='$no_reg', nama='$nama', status='$status', kelas='$kelas', lokasi='$lokasi', tgl_berdiri='$tgl_berdiri', luas='$luas' WHERE id_pasar='$id_pasar'");
		if($update){
			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Edit Data Pasar ".$id_pasar." Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-pasar' class='btn btn-danger btn-block'>Next >></button>
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