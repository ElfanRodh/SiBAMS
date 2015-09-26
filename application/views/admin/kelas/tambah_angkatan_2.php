<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-paperclip"></span>
			<a href="<?php echo site_url('guru');?>"> <strong>Kelas </strong></a>
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> <strong>Tambah Angkatan</strong></a> 
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
				<label class="col-lg-3 control-label">Tahun Angkatan</label>
				<div class="col-lg-9">
					<select required name="jk" class="form-control">
						<option value="">Tahun Angkatan?</option>
						<option value="L">Laki Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Kelas</label>
				<div class="col-lg-9">
					<select required name="jk" class="form-control">
						<option value="">Kelas?</option>
						<option value="L">Laki-Laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Walikelas</label>
				<div class="col-lg-9">
					<select required name="walikelas" class="form-control">
						<option value="">Pilih guru sebagai walikelas...</option>
						<?php
							foreach($walikelas->result_array() as $k)
							{
								echo "<option value='".$k['id_guru']."'> ".$k['id_guru']." - ".$k['nama_guru']."</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group well">
				<button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
				<a href="<?php echo site_url('kelas	');?>" class="btn btn-default">Kembali</a>
			</div>
		</form>
	</div>
</div>