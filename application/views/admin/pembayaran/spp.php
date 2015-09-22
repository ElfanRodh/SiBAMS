<div class="panel panel-default">
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
				<label class="col-lg-3 control-label">Jenis Bayar</label>
				<div class="col-lg-9">
					<select required name="jk" class="form-control">
						<option value="">Jenis Kelamin Anda?</option>
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Uang Bayar</label>
				<div class="col-lg-9">
					<div class="input-group">
						<span class="input-group-addon">Rp.</span>
						<input type="text" class="form-control" required aria-label="Amount (to the nearest dollar)" onkeypress="return isNumberKey(event)">
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
			<div class="form-group well">
				<button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
				<a href="<?php echo site_url('pembayaran');?>" class="btn btn-default">Kembali</a>
			</div>
		</form>
	</div>
</div>