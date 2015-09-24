<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-star-empty"/> </span>
			<a href="<?php echo site_url('guru');?>"> Guru NonAktif </a>
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> Detail </a> 
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
					<input required disabled value="<?php echo $guru['id_guru'];?>" type="text" name="id_guru" class="form-control" onkeypress="return isNumberKey(event)" size="12" maxlength="20" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama</label>
				<div class="col-lg-9">
					<input required disabled value="<?php echo $guru['nama_guru'];?>" type="text" name="nama" maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tempat Lahir</label>
				<div class="col-lg-9">
					<input required disabled value="<?php echo $guru['tmpt_lahir'];?>" type="text" name="tempat" maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tanggal Lahir</label>
				<div class="col-lg-9">
					<input required disabled value="<?php echo $guru['tgl_lahir'];?>" type="date" name="ttl" id="tanggal" class="form-control"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Jenis Kelamin</label>
				<div class="col-lg-9">
					<select required disabled name="jk" class="form-control">
						<option value=""><?php echo $guru['jenis_kelamin'];?> </option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Agama</label>
				<div class="col-lg-9">
					<select required disabled name="agama" class="form-control">
						<option value=""><?php echo $guru['agama'];?> </option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Pendidikan Terakhir</label>
				<div class="col-lg-9">
					<select required disabled name="pendidikan" class="form-control">
						<option value=""><?php echo $guru['pendidikan_akhir'];?> </option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Status Pegawai</label>
				<div class="col-lg-9">
					<select required disabled name="status" class="form-control">
						<option value=""><?php echo $guru['status'];?> </option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Alamat</label>
				<div class="col-lg-9">					
					<input required disabled value="<?php echo $guru['alamat'];?>" type="text" name="alamat" class="form-control">
				</div>
			</div>
			<div class="form-group well">
				<a href="<?php echo site_url('guru/nonaktif');?>" class="btn btn-default">Kembali</a>
			</div>			
		</form>
	</div>
</div>