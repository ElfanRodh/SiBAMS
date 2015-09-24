<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-user"/> </span> <a href="<?php echo site_url('siswa');?>"> <strong>Siswa </strong></a>
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a href="<?php echo site_url('siswa/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('siswa/cari');?>" method="post">
			<div class="form-group">
				<label>Cari Berdasar Nis / Nama Siswa </label>
				<input type="text" class="form-control" placeholder="Search" name="cari">
			</div>
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>	
		</form>
	</div>
	<div class="panel-body">
		<!--pesan error/sukses/dll-->
		<?php
		$data=$this->session->flashdata('m_sukses');
		if ($data!=null){?>
			<div class="alert alert-success" role="alert">
				<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<?php echo $data;?>
			</div>
		<?php
		}		
		$data=$this->session->flashdata('m_eror');
		if ($data!=null){?>
			<div class="alert alert-danger" role="alert">
				<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
				<span class="sr-only">Error:</span>
				<?php echo $this->session->flashdata('m_eror');?>
			</div>
		<?php
		}		
		?>
		<table class="table table-hover table-responsive table-bordered">
			<thead>
				<tr>
					<th width=10>No.</th>
					<th width=150>NIS</th>
					<th width=500>Nama</th>
					<th width=20>JK</th>
					<th width=100>Kelas</th>
					<th colspan=3>Aksi</th>
				</tr>
			</thead>
			<?php $no=0; foreach($siswa as $row ): $no++;?>
			<?php 	$nama=$row->nama_siswa;
					$id=$row->nis;?>
			<tr>
				<td><?php echo ($no+$page);?></td>
				<td><?php echo $id;?></td>
				<td><?php echo $row->nama_siswa;?></td>
				<td><?php echo $row->jenis_kelamin;?></td>
				<td><?php echo "kelasnya?";?></td>
				<td width=15><a href="<?php echo site_url('siswa/detail/'.$id);?>"
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'detail '.$nama;?>"
						>
						<i class='glyphicon glyphicon-zoom-in'></i>
					</a>
				</td>
				<td width=15><a href="<?php echo site_url('siswa/edit/'.$row->nis);?>"
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'edit '.$nama;?>"
						>
						<i class='glyphicon glyphicon-edit'></i>
					</a>
				</td>
				<td width=15><a href="<?php echo site_url('siswa/hapus/'.$id);?>"
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'nonaktifkan '.$nama;?>"
						>
						<i class='glyphicon glyphicon-trash'></i>
					</a>
				</td>
			</tr>
			<?php endforeach;?>
		</table>
		<p align="center"> <?php echo $pagination;?></p>
	</div>
</div>