<section class="content-header">
    <h1>Report<small>Pedagang</small></h1>
    <ol class="breadcrumb">
        <li><a href="home-admin.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Report</li>
    </ol>
</section>
<section class="content">
	 <div class="row">
        <div class="col-md-12">
			<div class="box box-primary">				
				<div class="box-body">
					<div class="panel-body">
						<form class="form-horizontal" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label class="col-sm-2 control-label">Pasar</label>
								<div class="col-sm-7">
								<?php
									include "dist/koneksi.php";
									$data = mysql_query("SELECT * FROM tb_pasar");        
									echo '<select name="id_pasar" class="form-control select2" style="width: 100%;">';    
									while ($row = mysql_fetch_array($data)) {    
										echo '<option value="'.$row['id_pasar'].'">'. $row['no_reg'].' - '.$row['nama'].'</option>';    
									}    
									echo '</select>';
									?>
								</div>
								<div class="col-sm-2">
									<button type="submit" name="print" value="print" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript" src="plugins/datepicker/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="plugins/datepicker/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
	 $('.form_date').datetimepicker({
			language:  'id',
			weekStart: 1,
			todayBtn:  1,
	  autoclose: 1,
	  todayHighlight: 1,
	  startView: 2,
	  minView: 2,
	  forceParse: 0
		});
		$(function () {
		//Initialize Select2 Elements
		$(".select2").select2();
	});
</script>