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
								<div class="input-group date form_date col-sm-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
								<input type="text" name="tgl_harga" value="<?=$hasil['tgl_harga'];?>" class="form-control"><span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
							</div>
							</div>
						</div>
							<div class="form-group">
							<label class="col-sm-3 control-label">Kategori</label>
							<div class="col-sm-4">
								<select name="kategori" class="form-control select2">
									<option value="Beras" <?php echo ($hasil['kategori']=='Kontrak')?"selected":""; ?>>Beras
									<option value="Gula" <?php echo ($hasil['kategori']=='Gula')?"selected":""; ?>>Gula
									<option value="Minyak Goreng" <?php echo ($hasil['kategori']=='Minyak Goreng')?"selected":""; ?>>Minyak Goreng
									<option value="Daging" <?php echo ($hasil['kategori']=='Daging')?"selected":""; ?>>Daging
									<option value="Telur" <?php echo ($hasil['kategori']=='Telur')?"selected":""; ?>>Telur
									<option value="Susu" <?php echo ($hasil['kategori']=='Susu')?"selected":""; ?>>Susu
									<option value="Palawija" <?php echo ($hasil['kategori']=='Palawija')?"selected":""; ?>>Palawija
									<option value="Garam" <?php echo ($hasil['kategori']=='Garam')?"selected":""; ?>>Garam
									<option value="Tepung Terigu" <?php echo ($hasil['kategori']=='Tepung Terigu')?"selected":""; ?>>Tepung Terigu
									<option value="Kacang" <?php echo ($hasil['kategori']=='Kacang')?"selected":""; ?>>Kacang
									<option value="Mie Instant" <?php echo ($hasil['kategori']=='Mie Instant')?"selected":""; ?>>Mie Instant
									<option value="Cabai" <?php echo ($hasil['kategori']=='Cabai')?"selected":""; ?>>Cabai
									<option value="Bawang" <?php echo ($hasil['kategori']=='Bawang')?"selected":""; ?>>Bawang
									<option value="Ikan" <?php echo ($hasil['kategori']=='Ikan')?"selected":""; ?>>Ikan
									<option value="Rempah" <?php echo ($hasil['kategori']=='Rempah')?"selected":""; ?>>Rempah
									<option value="Kopi" <?php echo ($hasil['kategori']=='Kopi')?"selected":""; ?>>Kopi
									<option value="Sayuran" <?php echo ($hasil['kategori']=='Sayuran')?"selected":""; ?>>Sayuran
									<option value="Semen" <?php echo ($hasil['kategori']=='Semen')?"selected":""; ?>>Semen
									<option value="Bahan Bakar" <?php echo ($hasil['kategori']=='Bahan Bakar')?"selected":""; ?>>Bahan Bakar
									<option value="Margarin" <?php echo ($hasil['kategori']=='Margarin')?"selected":""; ?>>Margarin
									<option value="Seng" <?php echo ($hasil['kategori']=='Seng')?"selected":""; ?>>Seng
									<option value="Besi" <?php echo ($hasil['kategori']=='Besi')?"selected":""; ?>>Besi
									<option value="Pupuk" <?php echo ($hasil['kategori']=='Pupuk')?"selected":""; ?>>Pupuk
									<option value="Kayu" <?php echo ($hasil['kategori']=='Kayu')?"selected":""; ?>>Kayu
									<option value="Lain-lain" <?php echo ($hasil['kategori']=='Lain-lain')?"selected":""; ?>>Lain-lain
								</select>
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