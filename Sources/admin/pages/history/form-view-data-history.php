<section class="content-header">
    <h1>Data<small>History</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">History</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPed=mysql_query("SELECT * FROM tb_logharga");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">							
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Produk</th>
								<th>Kategori</th>
								<th>Harga Sebelumnya</th>
								<th>Harga Updated</th>
								<th>Tanggal Sebelum</th>
								<th>Tanggal Sesudah</th>
								<th>Hapus</th>
								
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
								<td><?php echo $ped['namaproduk'];?></td>								
								<td><?php echo $ped['kategori'];?></td>								
								<td><?php echo $ped['hrglama'];?></td>
								<td><?php echo $ped['hrgbaru'];?></td>
								<td><?php echo $ped['waktu_sebelum'];?></td>
								<td><?php echo $ped['waktu_setelah'];?></td>
								<td class="tools" align="center"><a href="home-admin.php?page=delete-data-history&id_log=<?php echo $ped['id_log'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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