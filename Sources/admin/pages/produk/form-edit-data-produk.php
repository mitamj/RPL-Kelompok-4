<?php
	if (isset($_GET['id_produk'])) {
	$id_produk = $_GET['id_produk'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT * FROM tb_produk WHERE id_produk='$id_produk'");
	$hasil=mysql_fetch_array($ambilData);
		$id_produk	= $hasil['id_produk'];
//		$reg_ped= $hasil['reg_ped'];
?>
<section class="content-header">
<!--    <h1>Edit<small>Data Produk <b>#<?=$reg_ped?></b></small></h1> -->
    <h1>Edit<small>Data Produk</small></h1>
	<ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<form action="home-admin.php?page=edit-data-produk&id_produk=<?=$id_produk?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Produk</label>
							<div class="col-sm-4">
								<input type="text" name="nama" class="form-control" value="<?=$hasil['nama'];?>" maxlength="100">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Harga</label>
							<div class="col-sm-4">
								<input type="text" name="harga" class="form-control" value="<?=$hasil['harga'];?>" maxlength="100">
							</div>
							
						</div>
						

						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Harga</label>
							<div class="col-sm-4">
								<div class="input-group date form_date col-sm-12" data-date="" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2" data-link-format="dd-mm-yyyy">
								<input type="text" name="tgl_reg" value="<?=$hasil['tgl_harga'];?>" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Kategori</label>
							<div class="col-sm-4">
								<input type="text" name="kategori" class="form-control" value="<?=$hasil['kategori'];?>" maxlength="100">
							</div>
							
						</div>
						
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<button type="submit" name="edit" value="edit" class="btn btn-danger">Edit</button>
								<a href="home-admin.php?page=form-view-data-produk" type="button" class="btn btn-default">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- datepicker -->
<script type="text/javascript" src="plugins/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
	 $('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
		});
	$(function () {
		//Initialize Select2 Elements
		$(".select2").select2();
	});
</script>