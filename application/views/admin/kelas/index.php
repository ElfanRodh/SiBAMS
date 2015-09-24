<div class="panel panel-info">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-paperclip"></span>
			<a href="<?php echo site_url('kelas');?>"> <strong>Kelas </strong></a>
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a href="<?php echo site_url('kelas/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<a href="<?php echo site_url('kelas/nonaktif');?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Lihat Data Nonaktif</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('kelas/cari');?>" method="post">
			<div class="form-group">
				<label>Cari kelas</label>
				<input type="text" class="form-control" placeholder="ketikkan id / nama kelas" name="cari">
			</div>
			<button data-toggle="tooltip" data-placement="top" title="Tooltip on top" type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>	
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
					<th width=50>No.</th>
					<th width=200>Id Kelas</th>
					<th width=400>Nama Kelas</th>
					<th width=400>Jumlah Siswa</th>
					<th width=400>Keterangan</th>
					<th colspan=3>Aksi</th>
				</tr>
			</thead>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td width=15><a href=""
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'detail ';?>"
						>
						<i class='glyphicon glyphicon-zoom-in'></i>
					</a>
				</td>
				<td width=15><a href=""
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'edit ';?>"
						>
						<i class='glyphicon glyphicon-edit'></i>
					</a>
				</td>
				<td width=15><a href=""
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'nonaktifkan ';?>"
						>
						<i class='glyphicon glyphicon-trash'></i>
					</a>
				</td>
			</tr>
		</table>
	</div>
</div>