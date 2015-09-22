<div class="panel panel-default">
	<!--panel header-->
	<div class="panel-heading">
		<h4 class="panel-title">
			<span class="glyphicon glyphicon-usd"/></span> 
			<a href="<?php echo site_url('pembayaran');?>"> <strong>Pembayaran </strong></a>
		</h4>
    </div>
	
	<!--bawah panel / tambah dan cari-->
	<div class="well well-sm">
		<a href="<?php echo site_url('pembayaran/spp');?>" class="btn btn-primary"><i></i> SPP</a>
		<a href="<?php echo site_url('pembayaran/les');?>" class="btn btn-danger"><i></i> LES</a>
		<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('pembayaran/cari');?>" method="post">
			<div class="form-group">
				<label>Cari Siswa</label>
				<input type="text" class="form-control" placeholder="ketikkan nis / nama siswa" name="cari">
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
		<em> mestinya diisi dengan rekap data siswa belum bayar, dll </em>
	</div>
</div>