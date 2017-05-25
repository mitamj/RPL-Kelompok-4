<section class="content-header">
    <h1>Data<small>Pasar</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Pasar</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPas=mysql_query("SELECT * FROM tb_pasar");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">							
					<a href="home-admin.php?page=form-master-data-pasar" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Pasar</a><br /><br />					
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>No. Reg #</th>
								<th>Nama</th>
								<th>Status</th>
								<th>Kelas</th>
								<th>Lokasi</th>
								<th>Luas</th>
								<th>More</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$no=0;
							while($pas=mysql_fetch_array($tampilPas)){
							$no++
						?>	
							<tr>
								<td><?=$no?></td>
								<td><?php echo $pas['no_reg'];?></td>
								<td><a href="home-admin.php?page=view-detail-data-pasar&id_pasar=<?=$pas['id_pasar'];?>" title="detail"><?php echo $pas['nama'];?></a></td>
								<td>Pasar <?php echo $pas['status'];?></td>
								<td><?php echo $pas['kelas'];?></td>
								<td><?php echo $pas['lokasi'];?></td>
								<td><?=number_format($pas['luas'],0,",",".");?> M<sup>2</sup></td>
								<td class="tools" align="center"><a href="home-admin.php?page=view-detail-data-pasar&id_pasar=<?=$pas['id_pasar'];?>" title="detail"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=form-edit-data-pasar&id_pasar=<?=$pas['id_pasar'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=delete-data-pasar&id_pasar=<?php echo $pas['id_pasar'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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