<section class="content-header">
    <h1>Data<small>Pedagang</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Pedagang</li>
    </ol>
</section>
<?php
	include "dist/koneksi.php";
	$tampilPed=mysql_query("SELECT * FROM tb_pedagang");
?>
<section class="content">
    <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">							
					<a href="home-admin.php?page=form-master-data-pedagang" type="button" class="btn btn-primary"><i class="fa fa-plus"></i> Add Pedagang</a><br /><br />					
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>No. Reg #</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Pasar</th>
								<th>Kios / Los</th>
								<th>Luas Kios / Los</th>
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
								<td><?php echo $ped['reg_ped'];?></td>
								<td><a href="home-admin.php?page=view-detail-data-pedagang&id_ped=<?=$ped['id_ped'];?>" title="detail"><?php echo $ped['nama'];?></a></td>
								<td><?php echo $ped['alamat'];?></td>
								<td><?php
									$tampilPas=mysql_query("SELECT * FROM tb_pasar WHERE id_pasar='$ped[id_pasar]'");
									$pas=mysql_fetch_array($tampilPas);
									?>
									<?php echo $pas['nama'];?>
								</td>
								<td><?php echo $ped['kioslos'];?></td>
								<td><?=number_format($ped['luas_kl'],0,",",".");?> M<sup>2</sup></td>
								<td class="tools" align="center"><a href="home-admin.php?page=view-detail-data-pedagang&id_ped=<?=$ped['id_ped'];?>" title="detail"><i class="fa fa-folder-open"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=form-edit-data-pedagang&id_ped=<?=$ped['id_ped'];?>" title="edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="home-admin.php?page=delete-data-pedagang&id_ped=<?php echo $ped['id_ped'];?>" title="delete"><i class="fa fa-trash-o"></i></a></td>
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