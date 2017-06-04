<section class="content-header">
    <h1>Tambah<small>Data Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Pasar</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-admin.php?page=master-data-pasar" class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-3 control-label">No. Registrasi</label>
								<div class="col-sm-7">
									<input type="text" name="no_reg" class="form-control" maxlength="32">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Pasar</label>
								<div class="col-sm-7">
									<input type="text" name="nama" class="form-control" maxlength="64">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Status Pasar</label>
								<div class="col-sm-7">
									<select name="status" class="form-control select2">
										<option value="Tradisional">Pasar Tradisional</option>
										<option value="Modern">Pasar Modern</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Lokasi</label>
								<div class="col-sm-7">
									<textarea type="text" name="lokasi" class="form-control" maxlength="256"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Tanggal Berdiri</label>
								<div class="col-sm-4">
									<div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
										<input type="text" name="tgl_berdiri" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Luas Area</label>
								<div class="col-sm-4">
									<input type="text" name="luas" class="form-control" maxlength="11">
								</div>
								<div class="col-sm-3">
									<p>* Dalam M<sup>2</sup></p>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Foto Pasar</label>
								<div class="col-sm-4">
									<input type="file" name="foto1" class="form-control" maxlength="128">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Simpan</button>
									<a href="home-admin.php?page=form-view-data-pasar" type="button" class="btn btn-default">Batal</a>
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
	$(function () {
		//Initialize Select2 Elements
		$(".select2").select2();
	});
</script>