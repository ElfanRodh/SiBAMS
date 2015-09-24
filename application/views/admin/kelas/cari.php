<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-star-empty"/> 
			</span><a href="<?php echo site_url('guru');?>"> Guru Aktif </a>  
			<span class="glyphicon glyphicon-chevron-right"/>
			</span><a href="#"> Cari </a> 
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a disabled href="<?php echo site_url('guru/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('guru/cari');?>" method="post">
			<div class="form-group">
				<label>Cari Guru </label>
				<input type="text" class="form-control" placeholder="ketikkan id / nama guru" name="cari">
			</div>
			<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>	
		</form>
	</div>
	<div class="panel-body">
		<?php
			$data=$ketemu;
			if ($data!=null){?>
				<div class="alert alert-success" role="alert">
					<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
					<?php echo $ketemu;?>
				</div>
			<?php
			}
		?>
		<table class="table table-hover table-responsive table-bordered">
			<thead>
				<tr>
					<th width=10>No.</th>
					<th width=225>Kode Guru</th>
					<th width=500>Nama</th>
					<th width=20>JK</th>
					<th width=100>Status</th>
					<th colspan="3">Aksi</th>
				</tr>
			</thead>
			<?php $no=0; foreach($guru as $row ): $no++;?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $row->id_guru;?></td>
				<td><?php echo $row->nama_guru;?></td>
				<td><?php echo $row->jenis_kelamin;?></td>
				<td><?php echo $row->status;?></td>				
				<?php $nama=$row->nama_guru;
						$id=$row->id_guru;?>
				<td width=15><a href="<?php echo site_url('guru/detail/'.$id);?>"
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'detail '.$nama;?>"
						>
						<i class='glyphicon glyphicon-zoom-in'></i>
					</a>
				</td>
				<td width=15><a href="<?php echo site_url('guru/edit/'.$id);?>"
						class='tooltipsku' 
						data-toggle='tooltip' 
						data-placement='top' 
						title="<?php echo 'edit '.$nama;?>"
						>
						<i class='glyphicon glyphicon-edit'></i>
					</a>
				</td>
				<td width=15><a href="<?php echo site_url('guru/hapus/'.$id);?>"
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
		</Table>
		<div class="form-group well">
			<a href="<?php echo site_url('guru');?>" class="btn btn-default">Kembali</a>
		</div>		
	</div>
</div>