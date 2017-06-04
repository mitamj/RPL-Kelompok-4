<?php
	if (isset($_GET['id_pasar'])) {
	$id_pasar = $_GET['id_pasar'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT * FROM tb_pasar WHERE id_pasar='$id_pasar'");
	$hasil=mysql_fetch_array($ambilData);
		$id_pasar	= $hasil['id_pasar'];
		$no_reg	= $hasil['no_reg'];
?>
<section class="content-header">
    <h1>Edit<small>Data Pasar <b>#<?=$no_reg?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<form action="home-admin.php?page=edit-data-pasar&id_pasar=<?=$id_pasar?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">No. Registrasi</label>
							<div class="col-sm-7">
								<input type="text" name="no_reg" class="form-control" value="<?=$hasil['no_reg'];?>" maxlength="32">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Pasar</label>
							<div class="col-sm-7">
								<input type="text" name="nama" class="form-control" value="<?=$hasil['nama'];?>" maxlength="64">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status Pasar</label>
							<div class="col-sm-7">
								<select name="status" class="form-control select2" style="width: 100%;">
									<option value="Daerah" <?php echo ($hasil['status']=='Daerah')?"selected":""; ?>>Pasar Daerah
									<option value="Modern" <?php echo ($hasil['status']=='Modern')?"selected":""; ?>>Pasar Modern
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Lokasi</label>
							<div class="col-sm-7">
								<textarea type="text" name="lokasi" class="form-control" maxlength="256"><?=$hasil['lokasi'];?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Berdiri</label>
							<div class="col-sm-4">
								<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" name="tgl_berdiri" value="<?=$hasil['tgl_berdiri'];?>" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Luas Area</label>
							<div class="col-sm-4">
								<input type="text" name="luas" class="form-control" value="<?=$hasil['luas'];?>" maxlength="11">
							</div>
							<div class="col-sm-3">
								<p>* Dalam M<sup>2</sup></p>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<button type="submit" name="edit" value="edit" class="btn btn-danger">Edit</button>
								<a href="home-admin.php?page=form-view-data-pasar" type="button" class="btn btn-default">Cancel</a>
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