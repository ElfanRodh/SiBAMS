<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-star-empty"/> </span>
			<a href="<?php echo site_url('guru');?>"> Guru Aktif</a>
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> Edit </a> 
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
		<?php $id=$guru['id_guru'];?>
		<form class="form-horizontal" action="<?php echo site_url('guru/edit_proses/'.$id);?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label class="col-lg-3 control-label">NIP / ID Guru</label>
				<div class="col-lg-9">
					<input required disabled value="<?php echo $guru['id_guru'];?>" type="text" name="id_guru" class="form-control" onkeypress="return isNumberKey(event)" size="12" maxlength="20" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Nama</label>
				<div class="col-lg-9">
					<input required value="<?php echo $guru['nama_guru'];?>" type="text" name="nama" maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tempat Lahir</label>
				<div class="col-lg-9">
					<input required value="<?php echo $guru['tmpt_lahir'];?>" type="text" name="tempat" maxlength=100 class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Tanggal Lahir</label>
				<div class="col-lg-9">
					<input required value="<?php echo $guru['tgl_lahir'];?>" type="date" name="ttl" id="tanggal" class="form-control"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Jenis Kelamin</label>
				<div class="col-lg-9">
					<select required name="jk" class="form-control">
						<?php $jenis=$guru['jenis_kelamin'];?>
						<option value="">Jenis Kelamin Anda?</option>
						<option <?php if($jenis=="L"){ echo "selected";}?> value="L">Laki Laki</option>
						<option <?php if($jenis=="P"){ echo "selected";}?> value="P">Perempuan</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Agama</label>
				<div class="col-lg-9">
					<select required name="agama" class="form-control">
						<?php $agama=$guru['agama'];?>
						<option value="">Agama Anda?</option>
						<option <?php if($agama=="Islam"){ echo "selected";}?> value="Islam">Islam</option>
						<option <?php if($agama=="Kristen"){ echo "selected";}?> value="Kristen">Kristen</option>
						<option <?php if($agama=="Protestan"){ echo "selected";}?> value="Protestan">Protestan</option>
						<option <?php if($agama=="Budha"){ echo "selected";}?> value="Budha">Budha</option>
						<option <?php if($agama=="Hindu"){ echo "selected";}?> value="Hindu">Jindu</option>
						<option <?php if($agama=="Kepercayaan"){ echo "selected";}?> value="Kepercayaan">Kepercayaan</option>
					</select>
				</div>
			</div>			
			<div class="form-group">
				<label class="col-lg-3 control-label">Pendidikan Terakhir</label>
				<div class="col-lg-9">
					<select required name="pendidikan" class="form-control">
						<?php $Pendidikan=$guru['pendidikan_akhir'];?>
						<option value="">Pendidikan terakhir Anda?</option>
						<option <?php if($Pendidikan=='SMA'){ echo "selected";}?> value="SMA">SMA dan sederajatnya</option>
						<option <?php if($Pendidikan=="D1"){ echo "selected";}?> value="D1">Diploma 1</option>
						<option <?php if($Pendidikan=="D2"){ echo "selected";}?> value="D2">Diploma 2</option>
						<option <?php if($Pendidikan=="D3"){ echo "selected";}?> value="D3">Diploma 3</option>
						<option <?php if($Pendidikan=="D4"){ echo "selected";}?> value="D4">Diploma 4</option>
						<option <?php if($Pendidikan=="S1"){ echo "selected";}?> value="S1">Strata 1</option>
						<option <?php if($Pendidikan=="S2"){ echo "selected";}?> value="S2">Strata 2</option>
						<option <?php if($Pendidikan=="S3"){ echo "selected";}?> value="S3">Strata 3</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Status Pegawai</label>
				<div class="col-lg-9">
					<select required name="status" class="form-control">
						<?php $status=$guru['status'];?>
						<option value="">Status Anda?</option>
						<option <?php if($status=="pns"){ echo "selected";}?> value="pns">PNS</option>
						<option <?php if($status=="gtt"){ echo "selected";}?> value="gtt">GTT</option>
						<option <?php if($status=="nonaktif"){ echo "selected";}?> value="nonaktif">NONAKTIF</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-lg-3 control-label">Alamat</label>
				<div class="col-lg-9">					
					<input required value="<?php echo $guru['alamat'];?>" type="text" name="alamat" class="form-control">
				</div>
			</div>
			<div class="form-group well">
				<button class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> Update</button>
				<a href="<?php echo site_url('guru');?>" class="btn btn-default">Kembali</a>
			</div>
			
		</form>
	</div>
</div>