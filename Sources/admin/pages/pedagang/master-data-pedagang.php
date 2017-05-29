<section class="content-header">
    <h1>Master<small>Data Pedagang</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Master Data</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
	$id_pasar		=$_POST['id_pasar'];
	$kioslos		=$_POST['kioslos'];
	$luas_kl		=$_POST['luas_kl'];
	$reg_ped		=$_POST['reg_ped'];
	$tgl_reg		=$_POST['tgl_reg'];
	$status			=$_POST['status'];
	$dagangan		=$_POST['dagangan'];
	$nama			=$_POST['nama'];
	$tempat_lhr		=$_POST['tempat_lhr'];
	$tgl_lhr		=$_POST['tgl_lhr'];	
	$alamat			=$_POST['alamat'];
	$telp			=$_POST['telp'];
	$ket			=$_POST['ket'];
	$foto			=$_FILES['foto']['name'];
	
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
	$id_ped		=kdauto("tb_pedagang","");
	$date_crt	=date("Ymd");
	
	$cekno	=mysql_num_rows (mysql_query("SELECT reg_ped FROM tb_pedagang WHERE reg_ped='$_POST[reg_ped]'"));
	
		if (empty($_POST['id_pasar']) || empty($_POST['kioslos']) || empty($_POST['luas_kl']) || empty($_POST['reg_ped']) || empty($_POST['tgl_reg']) || empty($_POST['status']) || empty($_POST['dagangan']) || empty($_POST['nama']) || empty($_POST['tempat_lhr']) || empty($_POST['tgl_lhr'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali data pedagang. Pastikan data telah Anda masukan dengan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pedagang' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else if($cekno > 0) {
		echo "<div class='register-logo'><b>Oops!</b> No. REG Not Available</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali dan pastikan No. Registrasi pedaganag yang Anda masukan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-data-pedagang' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}
		else{
		$insert = "INSERT INTO tb_pedagang (id_ped, id_pasar, kioslos, luas_kl, reg_ped, tgl_reg, status, dagangan, nama, tempat_lhr, tgl_lhr, alamat, telp, ket, foto, date_crt) VALUES ('$id_ped', '$id_pasar', '$kioslos', '$luas_kl', '$reg_ped', '$tgl_reg', '$status', '$dagangan', '$nama', '$tempat_lhr', '$tgl_lhr', '$alamat', '$telp', '$ket', '$foto', '$date_crt')";
		$query = mysql_query ($insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Input Data Pedagang Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-pedagang' class='btn btn-danger btn-block'>Next >></button>
							</div>
						</div>
					</div>
				</div>";
		}
			else {
				echo "<div class='register-logo'><b>Oops!</b> 404 Error Server.</div>";
			}
		}
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
				move_uploaded_file ($_FILES['foto']['tmp_name'], "pages/asset/foto/".$foto);
			}
		}
	}
?>
</div>