<section class="content-header">
    <h1>Pengaturan<small>Aplikasi</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Aplikasi</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT * FROM tb_config WHERE id_app='1'");
	$hasil=mysql_fetch_array($ambilData);
		$id	=$hasil['id_app'];
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-admin.php?page=config-aplikasi&id=<?=$id?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Aplikasi</label>
								<div class="col-sm-7">
									<input type="text" name="nama_app" class="form-control" maxlength="16" value="<?=$hasil['nama_app'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Deskripsi</label>
								<div class="col-sm-7">
									<input type="text" name="desc_app" class="form-control" maxlength="64" value="<?=$hasil['desc_app'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Alias</label>
								<div class="col-sm-7">
									<input type="text" name="alias_app" class="form-control" maxlength="3" value="<?=$hasil['alias_app'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Logo</label>
								<div class="col-sm-7">
									<input type="file" name="logo" class="form-control" maxlength="255">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">URL / Link</label>
								<div class="col-sm-7">
									<input type="text" name="url_app" class="form-control" maxlength="64" value="<?=$hasil['url_app'];?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Text Anchor URL / Link</label>
								<div class="col-sm-7">
									<input type="text" name="anchor_app" class="form-control" maxlength="64" value="<?=$hasil['anchor_app'];?>">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Simpan</button>
									<a href="home-admin.php" type="button" class="btn btn-default">Batal</a>
								</div>
							</div>
						</form>
					</div>
				</div>
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
</script>