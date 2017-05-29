<section class="content-header">
    <h1>Delete<small>Data Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Delete</li>
    </ol>
</section>
<div class="register-box">
<?php
include "dist/koneksi.php";
if (isset($_GET['id_pasar'])) {
	$id_pasar = $_GET['id_pasar'];
	$query   = "SELECT * FROM tb_pasar WHERE id_pasar='$id_pasar'";
	$hasil   = mysql_query($query);
	$data    = mysql_fetch_array($hasil);
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	
	if (!empty($id_pasar) && $id_pasar != "") {
		$delete =mysql_query("DELETE FROM tb_pasar WHERE id_pasar='$id_pasar'");
		if ($delete) {		
			echo "<div class='register-logo'><b>Delete</b> Successful!</div>
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Data Pasar ".$id_pasar." Berhasil di Hapus</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-pasar' class='btn btn-danger btn-block'>Next >></button>
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