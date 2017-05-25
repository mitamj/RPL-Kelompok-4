<section class="content-header">
    <h1>Master<small>Data Pasar</small></h1>
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
								<label class="col-sm-3 control-label">Klasifikasi Kelas Pasar</label>
								<div class="col-sm-4">
									<?php
									$dataKls = mysql_query("SELECT * FROM tb_kelaspasar ORDER BY kelaspasar");        
									echo '<select name="kelas" class="form-control select2" style="width: 100%;">';    
									echo '<option value="">Pilih Kelas</option>';    
									while ($rowk = mysql_fetch_array($dataKls)) {    
										echo '<option value="'.$rowk['kelaspasar'].'">'. $rowk['kelaspasar'].'</option>';    
									}    
									echo '</select>';
									?>
								</div>
								<div class="col-sm-3" align="right">
									<button type="button" class="btn bg-orange btn-sm" data-toggle="modal" data-target="#masterkls">Tambah Master Kelas</button>
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
							<!--<div class="form-group">
								<label class="col-sm-3 control-label">Foto Samping</label>
								<div class="col-sm-4">
									<input type="file" name="foto2" class="form-control" maxlength="128">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Foto Belakang</label>
								<div class="col-sm-4">
									<input type="file" name="foto3" class="form-control" maxlength="128">
								</div>
							</div>-->
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-7">
									<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
									<a href="home-admin.php?page=form-view-data-pasar" type="button" class="btn btn-default">Cancel</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>
<div id="masterkls" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Master Data Kelas Pasar</h4>
			</div>
			<div class="modal-body">
				<form action="home-admin.php?page=master-data-kelaspasar" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-sm-2 control-label">Kelas</label>
						<div class="col-sm-2">
							<input type="text" name="kelaspasar" class="form-control" maxlength="8">
						</div>
						<div class="col-sm-6">
							<p>* Gunakan tanda baca TITIK (.) setelah Angka. Contoh: 1.A</p>
						</div>
						<div class="col-sm-2">
							<button type="submit" name="save" value="save" class="btn btn-danger">Save</button>
						</div>
					</div>
				</form>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Kelas Pasar</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$no=0;
						$tampilKls	=mysql_query("SELECT * FROM tb_kelaspasar ORDER BY kelaspasar");
						while($kls=mysql_fetch_array($tampilKls)){
						$no++;
					?>	
						<tr>
							<td><?=$no?></td>
							<td><?php echo $kls['kelaspasar'];?></td>
							<td class="tools" align="center"><a href="home-admin.php?page=form-edit-data-kelaspasar&id_kelaspasar=<?=$kls['id_kelaspasar'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=delete-data-kelaspasar&id_kelaspasar=<?=$kls['id_kelaspasar'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
						</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
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