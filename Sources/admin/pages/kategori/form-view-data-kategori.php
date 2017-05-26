<section class="content-header">
    <h1>Data<small>Kategori</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Kategori</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPed=mysql_query("SELECT * FROM tb_kategori");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">							
					<a href="home-admin.php?page=form-master-data-kategori" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Kategori</a><br /><br />					
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Kategori</th>
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
								<!--<td><?php echo $ped['reg_ped'];?></td>-->
								<td><a href="home-admin.php?page=view-detail-data-kategori&id_kat=<?=$ped['id_kat'];?>" title="detail"><?php echo $ped['nama'];?></a></td>
								
								<td class="tools" align="center"><a href="home-admin.php?page=view-detail-data-kategori&id_kat=<?=$ped['id_kat'];?>" title="detail"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=form-edit-data-kategori&id_kat=<?=$ped['id_kat'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=delete-data-kategori&id_kat=<?php echo $ped['id_kat'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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