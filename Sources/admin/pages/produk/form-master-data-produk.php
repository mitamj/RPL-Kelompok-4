<section class="content-header">
    <h1>Master<small>Data Produk</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Data Produk</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form action="home-admin.php?page=master-data-produk" class="form-horizontal" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Nama Produk</label>
								<div class="col-sm-4">
									<input type="text" name="nama" class="form-control" maxlength="100">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Harga</label>
								<div class="col-sm-4">
									<input type="text" name="harga" class="form-control" maxlength="100">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-3 control-label">Tanggal Harga</label>
								<div class="col-sm-4">
									<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
									<input type="text" name="tgl_harga" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
								</div>
								</div>
							</div>					
								<label class="col-sm-3 control-label">Kategori</label>
								<div class="col-sm-4">
									<select name="kategori" class="form-control select2">
										<option value="">Pilih</option>
										<option value="Beras">Beras</option>
										<option value="Gula">Gula</option>
										<option value="Minyak Goreng">Minyak Goreng</option>
										<option value="Daging">Daging</option>
										<option value="Telur">Telur</option>
										<option value="Susu">Susu</option>
										<option value="Palawija">Palawija</option>
										<option value="Garam">Garam</option>
										<option value="Tepung Terigu">Tepung Terigu</option>
										<option value="Kacang">Kacang</option>
										<option value="Mie Instant">Mie Instant</option>
										<option value="Cabai">Cabai</option>
										<option value="Bawang">Bawang</option>
										<option value="Ikan">Ikan</option>
										<option value="Rempah">Rempah</option>
										<option value="Kopi">Kopi</option>
										<option value="Sayuran">Sayuran</option>
										<option value="Semen">Semen</option>
										<option value="Bahan Bakar">Bahan Bakar</option>
										<option value="Margarin">Margarin</option>
										<option value="Seng">Seng</option>
										<option value="Besi">Besi</option>
										<option value="Pupuk">Pupuk</option>
										<option value="Kayu">Kayu</option>
										<option value="Lain-lain">Lain-lain</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
									<a href="home-admin.php?page=form-view-data-produk" type="button" class="btn btn-default">Cancel</a>
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