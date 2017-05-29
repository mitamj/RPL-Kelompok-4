<section class="content-header">
    <h1>Data<small>Produk</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Produk</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPed=mysql_query("SELECT * FROM tb_produk");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">							
					<a href="home-admin.php?page=form-master-data-produk" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Produk</a><br /><br />					
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Harga</th>
								<th>Tanggal Harga</th>
								<th>Kategori</th>
								<th>More</th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							$no=0;
							while($ped=mysql_fetch_array($tampilPed)){
							$no++
						?>	
							<tr>
								<td><?=$no?></td>
								<td><?php echo $ped['nama'];?></td>
								<td><?php echo $ped['harga'];?></td>
								<td><?php echo $ped['tgl_harga'];?></td>
								<td><?php echo $ped['kategori'];?></td>
								<td class="tools" align="center"><a href="home-admin.php?page=view-detail-data-produk&id_produk=<?=$ped['id_produk'];?>" title="detail"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=form-edit-data-produk&id_produk=<?=$ped['id_produk'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=delete-data-produk&id_produk=<?php echo $ped['id_produk'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
							</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
	</div>
</section>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>