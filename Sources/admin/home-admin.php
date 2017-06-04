<?php
session_start();
if(!isset($_SESSION['id_user'])){
    die("<b>Oops!</b> Access Failed.
		<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='index.php'>Back</button>");
}
if($_SESSION['hak_akses']!="Admin"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Bukan Admin.</p>
		<button type='button' onclick=location.href='index.php'>Back</button>");
}

	include "dist/koneksi.php";
	$App=mysql_query("SELECT * FROM tb_config WHERE id_app='1'");
	$set=mysql_fetch_array($App);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $set['desc_app']?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="dist/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="dist/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="plugins/iCheck/square/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="plugins/datepicker/bootstrap-datetimepicker.min.css">
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<script type="text/javascript" src="plugins/datatables/jquery.js"></script>
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/select2.min.css">
			
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="favicon.png" type="image/png" />
</head>
<body class="hold-transition skin-red fixed sidebar-collapse sidebar-mini">
<div class="wrapper">
	<header class="main-header">
		<a href="home-admin.php" class="logo"><span class="logo-mini"><?php echo $set['alias_app']?></span><span class="logo-lg"><?php echo $set['nama_app']?></span></a>
		<nav class="navbar navbar-static-top" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user"></i>
							<span class="hidden-xs"><?php echo $set['desc_app']?></span> &nbsp;<i class="fa fa-gear"></i>
						</a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<?php
									if (empty($set['logo']))
										echo "<img src='dist/img/profile/no-image.jpg' class='img-circle' alt='User Image'>";
									else
										echo "<img src='dist/img/profile/$set[logo]' class='img-circle' alt='User Image'>";
								?>
								<p><?php echo $_SESSION['nama_user'] ?><small><?php echo $_SESSION['hak_akses'] ?></small></p>
							</li>
							<!--<li class="user-body">
								<div class="row">
								</div>
							</li>-->
							<li class="user-footer">
								<div class="pull-left">
								</div>
								<div class="pull-right">
								  <a href="pages/login/act-logout.php" class="btn btn-default btn-flat">Keluar</a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<aside class="main-sidebar">
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li class="header">MAIN NAVIGATION</li>
				<li class="treeview"><a href="home-admin.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></i></a></li>
				<!--<li class="treeview"><a href="home-admin.php?page=form-view-data-pasar"><i class="fa fa-hospital-o"></i> <span>Data Pasar</span></i></a></li>-->
				<!--<li class="treeview"><a href="home-admin.php?page=form-view-data-pedagang"><i class="fa fa-user"></i> <span>Data Pedagang</span></i></a></li>-->
				<!--<li class="treeview"><a href="home-admin.php?page=form-view-data-produk"><i class="fa fa-shopping-cart"></i> <span>Data Produk</span></i></a></li>
				<!--<li class="treeview"><a href="home-admin.php?page=form-view-data-kategori"><i class="fa fa-bars"></i> <span>Data Kategori</span></i></a></li>-->
				<li class="treeview"><a href="home-admin.php?page=form-config-aplikasi"><i class="fa fa-gear"></i> <span>Pengaturan Aplikasi</span></i></a></li>
				<!--<li class="treeview"><a href="home-admin.php?page=chart-rekapitulasi"><i class="fa fa-bar-chart-o"></i> <span>Chart Rekapitulasi</span></i></a></li>
				<li class="treeview"><a href="#"><i class="fa fa-print"></i> <span>Report</span><i class="fa fa-angle-left pull-right"></i></a>
					<ul class="treeview-menu">
						<li><a href="home-admin.php?page=daftar-pasar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> Daftar Pasar</a></li>
						<li><a href="home-admin.php?page=daftar-pedagang">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i> Daftar Pedagang</a></li>
					</ul>
				</li>-->
				<li class="header">DATA PASAR</li>
				<li class="treeview"><a href="home-admin.php?page=form-view-data-pasar"><i class="fa fa-hospital-o"></i> <span>Lihat Data Pasar</span></i></a></li>
				<li class="treeview"><a href="home-admin.php?page=form-master-data-pasar"><i class="fa fa-plus"></i> <span>Tambah Data Pasar</span></i></a></li>
				<li class="header">DATA PRODUK</li>
				<li class="treeview"><a href="home-admin.php?page=form-view-data-produk"><i class="fa fa-shopping-cart"></i> <span>Lihat Data Produk</span></i></a></li>
				<li class="treeview"><a href="home-admin.php?page=form-master-data-produk"><i class="fa fa-plus"></i> <span>Tambah Data Produk</span></i></a></li>
				<li class="header">DATA KATEGORI</li>
				<li class="treeview"><a href="home-admin.php?page=form-view-data-kategori"><i class="fa fa-bars"></i> <span>Lihat Data Kategori</span></i></a></li>
				<li class="treeview"><a href="home-admin.php?page=form-master-data-kategori"><i class="fa fa-plus"></i> <span>Tambah Data Kategori</span></i></a></li>
			</ul>
		</section>
	</aside>
	<div class="content-wrapper">
		<section class="content">
			<?php
				$page = (isset($_GET['page']))? $_GET['page'] : "main";
				switch ($page) {					
					case 'form-view-data-pasar': include "pages/pasar/form-view-data-pasar.php"; break;
					case 'form-master-data-pasar': include "pages/pasar/form-master-data-pasar.php"; break;
					case 'master-data-pasar': include "pages/pasar/master-data-pasar.php"; break;
					case 'form-edit-data-pasar': include "pages/pasar/form-edit-data-pasar.php"; break;
					case 'edit-data-pasar': include "pages/pasar/edit-data-pasar.php"; break;
					case 'delete-data-pasar': include "pages/pasar/delete-data-pasar.php"; break;
					case 'view-detail-data-pasar': include "pages/pasar/view-detail-data-pasar.php"; break;
					case 'ganti-foto-pasar': include "pages/pasar/ganti-foto-pasar.php"; break;
					
					case 'form-view-data-pedagang': include "pages/pedagang/form-view-data-pedagang.php"; break;
					case 'form-master-data-pedagang': include "pages/pedagang/form-master-data-pedagang.php"; break;
					case 'master-data-pedagang': include "pages/pedagang/master-data-pedagang.php"; break;
					case 'form-edit-data-pedagang': include "pages/pedagang/form-edit-data-pedagang.php"; break;
					case 'edit-data-pedagang': include "pages/pedagang/edit-data-pedagang.php"; break;
					case 'delete-data-pedagang': include "pages/pedagang/delete-data-pedagang.php"; break;
					case 'view-detail-data-pedagang': include "pages/pedagang/view-detail-data-pedagang.php"; break;
					case 'ganti-foto-pedagang': include "pages/pedagang/ganti-foto-pedagang.php"; break;
					
					case 'form-view-data-produk': include "pages/produk/form-view-data-produk.php"; break;
					case 'form-master-data-produk': include "pages/produk/form-master-data-produk.php"; break;
					case 'master-data-produk': include "pages/produk/master-data-produk.php"; break;
					case 'form-edit-data-produk': include "pages/produk/form-edit-data-produk.php"; break;
					case 'edit-data-produk': include "pages/produk/edit-data-produk.php"; break;
					case 'delete-data-produk': include "pages/produk/delete-data-produk.php"; break;
					case 'view-detail-data-produk': include "pages/produk/view-detail-data-produk.php"; break;
					case 'ganti-foto-produk': include "pages/produk/ganti-foto-produk.php"; break;
					
					case 'form-view-data-kategori': include "pages/kategori/form-view-data-kategori.php"; break;
					case 'form-master-data-kategori': include "pages/kategori/form-master-data-kategori.php"; break;
					case 'master-data-kategori': include "pages/kategori/master-data-kategori.php"; break;
					case 'form-edit-data-kategori': include "pages/kategori/form-edit-data-kategori.php"; break;
					case 'edit-data-kategori': include "pages/kategori/edit-data-kategori.php"; break;
					case 'delete-data-kategori': include "pages/kategori/delete-data-kategori.php"; break;
					case 'view-detail-data-kategori': include "pages/kategori/view-detail-data-kategori.php"; break;
					case 'ganti-foto-kategori': include "pages/kategori/ganti-foto-kategori.php"; break;
					
					case 'master-data-kelaspasar': include "pages/master/master-data-kelaspasar.php"; break;
					case 'form-edit-data-kelaspasar': include "pages/master/form-edit-data-kelaspasar.php"; break;
					case 'edit-data-kelaspasar': include "pages/master/edit-data-kelaspasar.php"; break;
					case 'delete-data-kelaspasar': include "pages/master/delete-data-kelaspasar.php"; break;					
				
					case 'chart-rekapitulasi': include "pages/chart/chart-rekapitulasi.php"; break;					
					
					case 'daftar-pasar': include "pages/report/daftar-pasar.php"; break;
					case 'daftar-pedagang': include "pages/report/daftar-pedagang.php"; break;
					
					case 'form-config-aplikasi': include "pages/config/form-config-aplikasi.php"; break;					
					case 'config-aplikasi': include "pages/config/config-aplikasi.php"; break;					
					default : include 'dashboard.php';	
				}
			?>
		</section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">Made with ❤ in Banda Aceh<b> — </b> v 1.0</div>
		Copyright &copy; 2017 <a href="<?php echo $set['url_app']?>" target="_blank"><?php echo $set['anchor_app']?></a>. All rights reserved
	</footer>
</div>
	<!-- ./wrapper -->
	<!-- jQuery 2.1.4 -->
	<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.5 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="plugins/morris/morris.min.js"></script>
	<!-- Sparkline -->
	<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
	<!-- jvectormap -->
	<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<!-- jQuery Knob Chart -->
	<script src="plugins/knob/jquery.knob.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<!-- Slimscroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="dist/js/pages/dashboard.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/select2.full.min.js"></script>
</body>
</html>