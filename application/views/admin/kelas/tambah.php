<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-star-empty"/> </span>
			<a href="<?php echo site_url('guru');?>"> <strong>Guru Aktif </strong></a>
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> <strong>Tambah </strong></a> 
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

		<form class="form-horizontal" action="<?php echo site_url('guru/tambah_proses');?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-lg-3 control-label">NIP / ID Guru</label>
				<div class="col-lg-9">
					<input required type="text" name="id_guru" class="form-control" onkeypress="return isNumberKey(event)" size="12" maxlength="20" autofocus>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama</label>
				<div class="col-lg-9">
					<input required type="text" name="nama" maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tempat Lahir</label>
				<div class="col-lg-9">
					<input required type="text" name="tempat" maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tanggal Lahir</label>
				<div class="col-lg-9">
					<input required type="date" name="ttl" id="tanggal" class="form-control"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Jenis Kelamin</label>
				<div class="col-lg-9">
					<select required name="jk" class="form-control">
						<option value="">Jenis Kelamin Anda?</option>
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Agama</label>
				<div class="col-lg-9">
					<select required name="agama" class="form-control">
						<option value="">Agama Anda?</option>
						<option value="Islam">Islam</option>
						<option value="Kristen">Kristen</option>
						<option value="Protestan">Protestan</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Jindu</option>
						<option value="Kepercayaan">Kepercayaan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Pendidikan Terakhir</label>
				<div class="col-lg-9">
					<select required name="pendidikan" class="form-control">
						<option value="">Pendidikan terakhir Anda?</option>
						<option value="SMA">SMA dan sederajatnya</option>
						<option value="D1">Diploma 1</option>
						<option value="D2">Diploma 2</option>
						<option value="D3">Diploma 3</option>
						<option value="D4">Diploma 4</option>
						<option value="S1">Strata 1</option>
						<option value="S2">Strata 2</option>
						<option value="S3">Strata 3</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Status Pegawai</label>
				<div class="col-lg-9">
					<select required name="status" class="form-control">
						<option value="">Status Anda?</option>
						<option value="pns">PNS</option>
						<option value="gtt">GTT</option>
						<option value="nonaktif">NONAKTIF</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Alamat</label>
				<div class="col-lg-9">
					<input required type="text" name="alamat" class="form-control">
				</div>
			</div>
			<div class="form-group well">
				<button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
				<a href="<?php echo site_url('guru');?>" class="btn btn-default">Kembali</a>
			</div>
		</form>
	</div>
</div>