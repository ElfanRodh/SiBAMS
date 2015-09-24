<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-usd"> </span>
			<a href="<?php echo site_url('pembayaran');?>"> <strong>Pembayaran </a>
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> SPP </a> </strong>
		</h4>
    </div>
	<div class="panel-body">
		<!--pesan error/sukses/dll-->		
		<?php
		$data=$this->session->flashdata('message');
		if ($data!=null){?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<?php echo $this->session->flashdata('message');?>
			</div>
		<?php
		}
		?>
		<?php echo validation_errors();?>

		<form class="form-horizontal" action="<?php echo site_url('pembayaran/tambah_proses');?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-lg-3 control-label">NIS</label>
				<div class="col-lg-9">
					<input required type="text" name="id_spp" class="form-control" size="12" maxlength="20" autofocus>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama</label>
				<div class="col-lg-9">
					<input required type="text" readonly name="id_spp" class="form-control" size="12" maxlength="20" autofocus>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Kelas</label>
				<div class="col-lg-9">
					<input required type="text" readonly name="id_spp" class="form-control" size="12" maxlength="20" autofocus>
				</div>
			</div>
			<div class="panel panel-default">
				<!--panel header-->
				<div class="panel-heading">
					<h4 class="panel-title">
						Daftar Tagihan SPP
					</h4>
				</div>
				<!--panel body-->
				<div class="panel-body">
					<table class="table table-hover table-responsive table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Tahun</th>
								<th>Bulan</th>
								<th>Status</th>
								<th>Petugas</th>
								<th>Waktu</th>
								<th colspan=2>Aksi</th>
							</tr>
						</thead>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td width=15><a href=#
									class='tooltipsku' 
									data-toggle='tooltip' 
									data-placement='top' 
									title="<?php echo 'bayar ';?>"
									>
									<i class='glyphicon glyphicon-usd'></i>
								</a>
							</td>
							<td width=15><a href=#
									class='tooltipsku' 
									data-toggle='tooltip' 
									data-placement='top' 
									title="<?php echo 'detail ';?>"
									>
									<i class='glyphicon glyphicon-zoom-in'></i>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<!--tombol-->
			<div class="form-group well">
				<button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
				<a href="<?php echo site_url('pembayaran');?>" class="btn btn-default">Kembali</a>
			</div>
			
			<div class="form-group">
				<label class="col-lg-3 control-label">Uang Bayar</label>
				<div class="col-lg-9">
					<div class="input-group">
						<span class="input-group-addon">Rp.</span>
						<input readonly type="text" class="form-control" required aria-label="Amount (to the nearest dollar)" onkeypress="return isNumberKey(event)">
						<span class="input-group-addon">.00</span>
					</div>
				</div>
			</div>			
			<div class="form-group">
				<label class="col-lg-3 control-label">Uang Serah</label>
				<div class="col-lg-9">
					<div class="input-group">
						<span class="input-group-addon">Rp.</span>
						<input type="text" class="form-control" required aria-label="Amount (to the nearest dollar)" onkeypress="return isNumberKey(event)">
						<span class="input-group-addon">.00</span>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Uang Kembali</label>
				<div class="col-lg-9">
					<div class="input-group">
						<span class="input-group-addon">Rp.</span>
						<input type="text" class="form-control" required aria-label="Amount (to the nearest dollar)" onkeypress="return isNumberKey(event)">
						<span class="input-group-addon">.00</span>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>