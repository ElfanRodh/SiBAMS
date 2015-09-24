<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-user"/> </span>
			<a href="<?php echo site_url('siswa');?>"> <strong> Siswa </strong></a>
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
		<form class="form-horizontal" action="<?php echo site_url('siswa/tambah_proses');?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-lg-3 control-label">Nis</label>
				<div class="col-lg-9">
					<input required type="text" name="nis" class="form-control" size="12" maxlength="7" autofocus>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama</label>
				<div class="col-lg-9">
					<input required type="text" name="nama" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Jenis Kelamin</label>
				<div class="col-lg-9">
					<select required name="jk" class="form-control">
						<option>Jenis Kelamin?</option>
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tempat Lahir</label>
				<div class="col-lg-9">
					<input required type="text" name="tempat" class="form-control"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tanggal Lahir</label>
				<div class="col-lg-9">
					<input required type="date" name="tl" id="tanggal" class="form-control"/>
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
				<label class="col-lg-3 control-label">Alamat Asli</label>
				<div class="col-lg-9">
					<input required type="text" name="alamat_asli" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Alamat Tinggal/Kos</label>
				<div class="col-lg-9">
					<input required type="text" name="alamat_tinggal" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Telepon</label>
				<div class="col-lg-9">
					<input required type="text" name="telepon" class="form-control" size="12" maxlength="7">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Sekolah Asal</label>
				<div class="col-lg-9">
					<input required type="text" name="sekolah_asal" class="form-control" size="12" maxlength="7">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tahun Masuk</label>
				<div class="col-lg-9">
					<select required name="tahun_masuk" class="form-control">
						<option>Tahun Masuk Anda?</option>
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama Ibu</label>
				<div class="col-lg-9">
					<input required type="text" name="nama_ibu" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama Bapak</label>
				<div class="col-lg-9">
					<input required type="text" name="nama_bapak" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Kelas</label>
				<div class="col-lg-9">
					<input required type="text" name="kelas" class="form-control">
				</div>
			</div>
			<div class="form-group well">
				<button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
				<a href="<?php echo site_url('siswa');?>" class="btn btn-default">Kembali</a>
			</div>
		</form>
	</div>
</div>