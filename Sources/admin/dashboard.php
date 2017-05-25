<section class="content-header">
   <h1>HARGAPASAR<small>Dashboard</small></h1>
    <ol class="breadcrumb">
		<li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$pasar=mysql_query("SELECT * FROM tb_pasar");
	$jmlpas = mysql_num_rows($pasar);
	$pedagang=mysql_query("SELECT * FROM tb_pedagang");
	$jmlped = mysql_num_rows($pedagang);
	$produk=mysql_query("SELECT * FROM tb_produk");
	$jmlpro = mysql_num_rows($produk);
?>
<section class="content">
    <div class="row">
		<div class="col-lg-6 col-xs-6">
			<div class="small-box bg-blue">
				<div class="inner">
					<h4><?=$jmlpas?></h4>
					<p>Total Pasar</p>
				</div>
				<div class="icon">
					<i class="ion ion-home"></i>
				</div>
				<p class="small-box-footer"><a href="home-admin.php?page=form-view-data-pasar"><font color="FFFFFF">Lihat Data Pasar <i class="fa fa-arrow-circle-right"></i></font></a></p>
			</div>
        </div>
		<div class="col-lg-6 col-xs-6">
			<div class="small-box bg-orange">
				<div class="inner">
					<h4><?=$jmlped?></h4>
					<p>Total Pedagang</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<p class="small-box-footer"><a href="home-admin.php?page=form-view-data-pedagang"><font color="FFFFFF">Lihat Data Pedagang <i class="fa fa-arrow-circle-right"></i></font></a></p>
			</div>
        </div>
        <div class="col-lg-6 col-xs-6">
			<div class="small-box bg-red">
				<div class="inner">
					<h4><?=$jmlpro?></h4>
					<p>Total Produk</p>
				</div>
				<div class="icon">
					<i class="ion ion-ios7-cart"></i>
				</div>
				<p class="small-box-footer"><a href="home-admin.php?page=form-view-data-produk"><font color="FFFFFF">Lihat Data Barang <i class="fa fa-arrow-circle-right"></i></font></a></p>
			</div>
        </div>
		<div class="col-lg-6 col-xs-6">
			<div class="small-box bg-green">
				<div class="inner">
					<h4><?=$jmlped?></h4>
					<p>Total Kategori</p>
				</div>
				<div class="icon">
					<i class="ion ion-navicon-round"></i>
				</div>
				<p class="small-box-footer"><a href="home-admin.php?page=form-view-data-kategori"><font color="FFFFFF">Lihat Data Kategori <i class="fa fa-arrow-circle-right"></i></font></a></p>
			</div>
        </div>
    </div>
	<!--<div class="row">
		<div class="col-lg-12">
			<div class="box box-primary">
				<section class="content">
					<div id='container'></div>
				</section>
				<div class="clearfix"></div>
			</div>
        </div>
    </div>-->
</section>
<script src="plugins/chart/jquery.min.js" type="text/javascript"></script>
<script src="plugins/chart/highcharts.js" type="text/javascript"></script>
<script type="text/javascript">
	var chart1; // globally available
		$(document).ready(function() {
			chart1 = new Highcharts.Chart({
				chart: {
					renderTo: 'container',
					type: 'column'
				},   
				title: {
					text: 'Jumlah Pedagang Pada Tiap Pasar'
				},
				xAxis: {
					categories: ['Pasar']
				},
				yAxis: {
					title: {
						text: 'Jumlah Pedagang'
					}
				},
				series:             
					[
					<?php 
					$sql   = "SELECT id_pasar FROM tb_pedagang GROUP BY id_pasar";
					$query = mysql_query( $sql )  or die(mysql_error());
						while( $pas = mysql_fetch_array( $query ) ){
							$id	=$pas['id_pasar'];
							
							$namaPas	=mysql_query("SELECT * FROM tb_pasar WHERE id_pasar='$id'");
							$npas=mysql_fetch_array($namaPas);
							$nama	=$npas['nama'];
							
							$sql_jumlah   = "SELECT * FROM tb_pedagang WHERE id_pasar='$id'";        
							$query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
							$data = mysql_num_rows( $query_jumlah );
							
							$sql_jumlah   = "SELECT * FROM tb_produk WHERE id_produk='$id'";        
							$query_jumlah = mysql_query( $sql_jumlah ) or die(mysql_error());
							$data = mysql_num_rows( $query_jumlah );
									                 										
					?>
					{
						name: '<?php echo $nama; ?>',
						data: [<?php echo $data; ?>]
					},
					<?php 
					} 
					?>
					]
			});
		});	
</script>