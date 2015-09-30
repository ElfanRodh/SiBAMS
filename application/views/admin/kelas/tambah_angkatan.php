<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-paperclip"></span>
			<a href="<?php echo site_url('guru');?>"> <strong>Kelas </strong></a>
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> <strong>Tambah</strong></a> 
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
		<form class="form-horizontal" action="<?php echo site_url('kelas/tambah_angkatan_proses');?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-lg-3 control-label">id kelas</label>
				<div class="col-lg-9">
					<input type="text" name="id_kelas" readonly maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tahun Angkatan</label>
				<div class="col-lg-9">
					<select required name="tahun" class="form-control">
						<option value="">Pilih tahun angkatan...</option>
						<?php
							for($i=date('Y'); $i>=date('Y')-15; $i-=1){
								echo"<option value='$i'> $i </option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Jurusan</label>
				<div class="col-lg-9">
					<select required name="jurusan" class="form-control">
						<option value="">Pilih jurusan kelas...</option>
						<?php
							foreach($jurusan->result_array() as $j)
							{
								echo "<option value='".$j['id_jurusan']."'> ".$j['id_jurusan']." - ".$j['nama_jurusan']."</option>";
							}
						?>
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