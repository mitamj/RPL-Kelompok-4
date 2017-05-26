<?php
	if (isset($_GET['id_kelaspasar'])) {
	$id_kelaspasar = $_GET['id_kelaspasar'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT * FROM tb_kelaspasar WHERE id_kelaspasar='$id_kelaspasar'");
	$hasil=mysql_fetch_array($ambilData);
		$id_kelaspasar	= $hasil['id_kelaspasar'];
?>
<section class="content-header">
    <h1>Edit<small>Master Kelas Pasar <b>#<?=$id_kelaspasar?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<form action="home-admin.php?page=edit-data-kelaspasar&id_kelaspasar=<?=$id_kelaspasar?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Kelas Pasar</label>
							<div class="col-sm-7">
								<input type="text" name="kelaspasar" class="form-control" value="<?=$hasil['kelaspasar'];?>" maxlength="8">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<button type="submit" name="edit" value="edit" class="btn btn-danger">Edit</button>
								<a href="home-admin.php?page=form-master-data-pasar" type="button" class="btn btn-default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>