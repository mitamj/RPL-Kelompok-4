<section class="content-header">
    <h1>Delete<small>Master Kelas Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Delete</li>
    </ol>
</section>
<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['id_kelaspasar'])) {
	$id_kelaspasar = $_GET['id_kelaspasar'];
	$query   = "SELECT * FROM tb_kelaspasar WHERE id_kelaspasar='$id_kelaspasar'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($id_kelaspasar) && $id_kelaspasar != "") {
		$delete =  mysql_query("DELETE FROM tb_kelaspasar WHERE id_kelaspasar='$id_kelaspasar'");
		if ($delete) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Master Kelas Pasar ".$id_kelaspasar." Berhasil di Hapus</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pasar' class='btn btn-danger btn-block'>Next >></button>
							</div>
						</div>
					</div>
				</div>";		
		}
		else{
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";	
		}
	}
	mysql_close($Open);
?>
</div>