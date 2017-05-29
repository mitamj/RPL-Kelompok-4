<section class="content-header">
    <h1>Edit<small>Master Kelas Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<div class="register-box">
<?php
	if (isset($_GET['id_kelaspasar'])) {
	$id_kelaspasar = $_GET['id_kelaspasar'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
				
	if ($_POST['edit'] == "edit") {
		$kelaspasar	=$_POST['kelaspasar'];
		
		include "dist/koneksi.php";
		$update= mysql_query ("UPDATE tb_kelaspasar SET kelaspasar='$kelaspasar' WHERE id_kelaspasar='$id_kelaspasar'");
		if($update){
			echo "<div class='register-logo'><b>Edit</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Edit Master Kelas Pasar ".$id_kelaspasar." Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pasar' class='btn btn-danger btn-block'>Next >></button>
							</div>
						</div>
					</div>
				</div>";
		}
		else {
			echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
		}
	}
?>
</div>