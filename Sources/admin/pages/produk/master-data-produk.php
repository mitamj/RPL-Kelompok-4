<section class="content-header">
    <h1>Master<small>Data Produk</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Master Data</li>
    </ol>
</section>
<div class="register-box">
<?php	
	if ($_POST['save'] == "save") {
		$id_produk		=$_POST['id_produk'];
		$nama		=$_POST['nama'];
		$harga		=$_POST['harga'];
		$tgl_harga		=$_POST['tgl_harga'];
		$kategori		=$_POST['kategori'];
		
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
	$id_produk		=kdauto("tb_produk","");
	$date_crt	=date("Ymd");
	
//	$cekno	=mysql_num_rows (mysql_query("SELECT reg_ped FROM tb_produk WHERE reg_ped='$_POST[reg_ped]'"));
	
		if (empty($_POST['id_produk']) || empty($_POST['nama']) || empty($_POST['harga']) || empty($_POST['tgl_harga']) || empty($_POST['kategori'])) {
		echo "<div class='register-logo'><b>Oops!</b> Data Tidak Lengkap.</div>
			<div class='box box-primary'>
				<div class='register-box-body'>
					<p>Harap periksa kembali data produk. Pastikan data telah Anda masukan dengan lengkap dan benar</p>
					<div class='row'>
						<div class='col-xs-8'></div>
						<div class='col-xs-4'>
							<button type='button' onclick=location.href='home-admin.php?page=form-master-data-produk' class='btn btn-block btn-warning'>Back</button>
						</div>
					</div>
				</div>
			</div>";
		}

		else{
		$insert = "INSERT INTO tb_produk (id_produk, nama, harga, tgl_harga, kategori, foto) VALUES ('$id_produk', '$nama', '$harga', '$tgl_harga', '$kategori', '$foto')";
		$query = mysql_query ($insert);
		
		if($query){
			echo "<div class='register-logo'><b>Input</b> Successful!</div>	
				<div class='box box-primary'>
					<div class='register-box-body'>
						<p>Input Data Produk Berhasil</p>
						<div class='row'>
							<div class='col-xs-8'></div>
							<div class='col-xs-4'>
								<button type='button' onclick=location.href='home-admin.php?page=form-view-data-produk' class='btn btn-danger btn-block'>Next >></button>
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