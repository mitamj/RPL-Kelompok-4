<?php
	if (isset($_GET['id_ped'])) {
	$id_ped = $_GET['id_ped'];
	}
	else {
		die ("Error. No Kode Selected! ");	
	}
	include "dist/koneksi.php";
	$ambilData=mysql_query("SELECT * FROM tb_pedagang WHERE id_ped='$id_ped'");
	$hasil=mysql_fetch_array($ambilData);
		$id_ped	= $hasil['id_ped'];
		$reg_ped= $hasil['reg_ped'];
?>
<section class="content-header">
    <h1>Edit<small>Data Pedagang <b>#<?=$reg_ped?></b></small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Data</li>
    </ol>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<form action="home-admin.php?page=edit-data-pedagang&id_ped=<?=$id_ped?>" class="form-horizontal" method="POST" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">Pasar</label>
							<div class="col-sm-7">
								<?php
								include "dist/koneksi.php";
								$data = mysql_query("SELECT * FROM tb_pasar");        
								echo '<select name="id_pasar" class="form-control select2" style="width: 100%;">';    
								echo '<option value="'.$hasil['id_pasar'].'">'.$hasil['id_pasar'].'</option>';    
								while ($row = mysql_fetch_array($data)) {    
									echo '<option value="'.$row['id_pasar'].'">'. $row['no_reg'].' - '.$row['nama'].'</option>';    
								}    
								echo '</select>';
								?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Kios / Los</label>
							<div class="col-sm-4">
								<input type="text" name="kioslos" class="form-control" value="<?=$hasil['kioslos'];?>" maxlength="16">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Luas Kios / Los</label>
							<div class="col-sm-4">
								<input type="text" name="luas_kl" class="form-control" value="<?=$hasil['luas_kl'];?>" maxlength="11">
							</div>
							<div class="col-sm-3">
								<p>* Dalam M<sup>2</sup></p>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">No. Registrasi Pedagang</label>
							<div class="col-sm-4">
								<input type="text" name="reg_ped" class="form-control" value="<?=$hasil['reg_ped'];?>" maxlength="32">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tanggal Registrasi Pedagang</label>
							<div class="col-sm-4">
								<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input type="text" name="tgl_reg" value="<?=$hasil['tgl_reg'];?>" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Status Dagang</label>
							<div class="col-sm-4">
								<select name="status" class="form-control select2">
									<option value="Kontrak" <?php echo ($hasil['status']=='Kontrak')?"selected":""; ?>>Kontrak
									<option value="Non Kontrak" <?php echo ($hasil['status']=='Non Kontrak')?"selected":""; ?>>Non Kontrak
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Jenis Barang Dagangan</label>
							<div class="col-sm-4">
								<input type="text" name="dagangan" class="form-control" value="<?=$hasil['dagangan'];?>" maxlength="32">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Pedagang</label>
							<div class="col-sm-7">
								<input type="text" name="nama" class="form-control" value="<?=$hasil['nama'];?>" maxlength="64">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Tempat, Tanggal Lahir</label>
							<div class="col-sm-3">
								<input type="text" name="tempat_lhr" class="form-control" value="<?=$hasil['tempat_lhr'];?>" maxlength="64">
							</div>
							<div class="input-group date form_date col-sm-3" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input type="text" name="tgl_lhr" value="<?=$hasil['tgl_lhr'];?>" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Alamat</label>
							<div class="col-sm-7">
								<textarea type="text" name="alamat" class="form-control" maxlength="255"><?=$hasil['alamat'];?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">No. Telp</label>
							<div class="col-sm-7">
								<input type="text" name="telp" class="form-control" value="<?=$hasil['telp'];?>" maxlength="12">
							</div>
						</div>							
						<div class="form-group">
							<label class="col-sm-3 control-label">Ket</label>
							<div class="col-sm-7">
								<input type="text" name="ket" class="form-control" value="<?=$hasil['ket'];?>" maxlength="64">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-7">
								<button type="submit" name="edit" value="edit" class="btn btn-danger">Edit</button>
								<a href="home-admin.php?page=form-view-data-pedagang" type="button" class="btn btn-default">Cancel</a>
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