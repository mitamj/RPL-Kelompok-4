<section class="content-header">
    <h1>Master<small>Data Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Master Data</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$no_reg			=$_POST['no_reg'];
	$nama			=$_POST['nama'];
	$status			=$_POST['status'];
	$kelas			=$_POST['kelas'];
	$lokasi			=$_POST['lokasi'];
	$tgl_berdiri	=$_POST['tgl_berdiri'];	
	$luas			=$_POST['luas'];
	$foto1			=$_FILES['foto1']['name'];
	$foto2			=$_FILES['foto2']['name'];
	$foto3			=$_FILES['foto3']['name'];
	
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
	$id_pasar	=kdauto("tb_pasar","");
	$date_crt	=date("Ymd");
	
	$cekno	=mysql_num_rows (mysql_query("SELECT no_reg FROM tb_pasar WHERE no_reg='$_POST[no_reg]'"));
	
		if (empty($_POST['no_reg']) || empty($_POST['nama']) || empty($_POST['status']) || empty($_POST['kelas']) || empty($_POST['lokasi']) || empty($_POST['tgl_berdiri']) || empty($_POST['luas'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali data pasar. Pastikan data telah Anda masukan dengan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pasar' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else if($cekno > 0) {
		echo "<div class='register-logo'><b>Oops!</b> NO. Reg Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. Registrasi Pasar yang Anda masukan sudah benar</p>
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
		$insert = "INSERT INTO tb_pasar (id_pasar, no_reg, nama, status, kelas, lokasi, tgl_berdiri, luas, foto1, foto2, foto3, date_crt) VALUES ('$id_pasar', '$no_reg', '$nama', '$status', '$kelas', '$lokasi', '$tgl_berdiri', '$luas', '$foto1', '$foto2', '$foto3', '$date_crt')";
		$query = mysql_query ($insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Input Data Pasar Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-pasar' class='btn btn-danger btn-block'>Next >></button>
							</div>
						</div>
					</div>
				</div>";
		}
			else {
				echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
			}
		}
		if (strlen($foto1)>0) {
			if (is_uploaded_file($_FILES['foto1']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto1']['tmp_name'], "pages/asset/foto/".$foto1);
			}
		}	
		if (strlen($foto2)>0) {
			if (is_uploaded_file($_FILES['foto2']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto2']['tmp_name'], "pages/asset/foto/".$foto2);
			}
		}
		if (strlen($foto3)>0) {
			if (is_uploaded_file($_FILES['foto3']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto3']['tmp_name'], "pages/asset/foto/".$foto3);
			}
		}
	}
?>
</div>