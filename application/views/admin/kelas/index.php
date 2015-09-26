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
		<a href="<?php echo site_url('kelas/tambah_angkatan');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Angkatan</a>
	</div>
	<div class="panel-body">
		<em><strong>data kelas per tahun angkatan</strong></em>
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
					<th width=100>Id Kelas</th>
					<th width=100>Tahun Ajaran</th>
					<th width=250>Jurusan</th>
					<th width=100>Status</th>
					<th width=100>Jumlah Siswa</th>
					<th width=250>Walikelas</th>
					<th colspan=3>Aksi</th>
				</tr>
			</thead>
			<?php $no=0; foreach($kelas as $row ): $no++;?>
				<tr>
					<td><?php echo ($no+$page);?></td>
					<td><?php echo $row->id_kelas;?></td>
					<td><?php echo $row->tahun_ajaran;?></td>
					<td><?php echo $row->nama_jurusan;?></td>
					<td><?php echo $row->nama_status;?></td>
					<td><?php echo "bilangan";?></td>
					<td><?php echo $row->nama_guru;?></td>
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
							title="<?php echo 'jadikan lulusan ';?>"
							>
							<i class='glyphicon glyphicon-trash'></i>
						</a>
					</td>
				</tr>
			<?php endforeach;?>
		</table>
	</div>
</div>