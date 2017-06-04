<section class="content-header">
    <h1>Change<small>Foto</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Foto</li>
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
				
	if ($_POST['save'] == "save") {
		$foto			=$_FILES['foto']['name'];
		
		if (empty($_FILES['foto']['name'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali foto yang Anda pilih. Data tidak boleh kosong</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=view-detail-data-kategori&id_kat=$id_kat' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		include "dist/koneksi.php";
		$update= mysql_query ("UPDATE tb_kategori SET foto='$foto' WHERE id_kat='$id_kat'");
			if($update){
				echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
					<div class='box box-primary'>
						<div class='register-box-body'>
							<p>Edit Foto Kategori ".$id_kat." Berhasil</p>
							<div class='row'>
								<div class='col-xs-8'></div>
								<div class='col-xs-4'>
									<button type='button' onclick=location.href='home-admin.php?page=view-detail-data-kategori&id_kat=$id_kat' class='btn btn-danger btn-block'>Next >></button>
								</div>
							</div>
						</div>
					</div>";
			}
			else {
				echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
			}
		}
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto']['tmp_name'], "pages/asset/foto/".$foto);
			}
		}
	}
?>
</div>