<section class="content-header">
    <h1>Master<small>Data Kelas Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Master Data</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$kelaspasar	=$_POST['kelaspasar'];
	
	include "dist/koneksi.php";
	function kdauto($tabel, $inisial){
		$struktur   = mysql_query("SELECT * FROM $tabel");
		$field      = mysql_field_name($struktur,0);
		$panjang    = mysql_field_len($struktur,0);
		$qry  = mysql_query("SELECT max(".$field.") FROM ".$tabel);
		$row  = mysql_fetch_array($qry);
		if ($row[0]=="") {
		$angka=0;
		}
		else {
		$angka= substr($row[0], strlen($inisial));
		}
		$angka++;
		$angka      =strval($angka);
		$tmp  ="";
		for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";
		}
		return $inisial.$tmp.$angka;
		}
	$id_kelaspasar	=kdauto("tb_kelaspasar","");
	
	$cekname	=mysql_num_rows (mysql_query("SELECT kelaspasar FROM tb_kelaspasar WHERE kelaspasar='$_POST[kelaspasar]'"));
	
		if (empty($_POST['kelaspasar'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali. Pastikan Nama Kelas telah Anda masukan dengan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pasar' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else if($cekname > 0) {
		echo "<div class='register-logo'><b>Oops!</b> Duplikat Data</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali. Pastikan Nama Kelas telah Anda masukan dengan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pasar' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$insert = "INSERT INTO tb_kelaspasar (id_kelaspasar, kelaspasar) VALUES ('$id_kelaspasar', '$kelaspasar')";
		$query = mysql_query ($insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Input Data Master Kelas Pasar Berhasil</p>
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
	}
?>
</div>