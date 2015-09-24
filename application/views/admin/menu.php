<div class="panel-group" id="accordion">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
				</span> Master</a>
			</h4>
		</div>
		<div id="collapseOne" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-star"></span> <a href="<?php echo site_url('petugas');?>">Petugas</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-star-empty"></span> <a href="<?php echo site_url('guru');?>">Guru</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-paperclip"></span> <a href="<?php echo site_url('kelas');?>">Kelas</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-user"></span> <a href="<?php echo site_url('siswa');?>">Siswa</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-th-list"></span> <a href="<?php echo site_url('akun');?>">Akun</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-info-sign">
				</span> Informasi</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-usd"></span><a href="<?php echo site_url('peminjaman');?>"> Siswa tahun ini</a></span>
						</td>
					</tr>
					<tr>
						<td>
						   <span class="glyphicon glyphicon-import"></span> <a href="<?php echo site_url('pengembalian');?>"> Siswa blm bayar</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-retweet	">
				</span> Transaksi</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-usd"></span><a href="<?php echo site_url('pembayaran');?>"> Pembayaran</a></span>
						</td>
					</tr>
					<tr>
						<td>
						   <span class="glyphicon glyphicon-import"></span> <a href="<?php echo site_url('pengembalian');?>"> Tabungan</a>
						</td>
					</tr>
					<tr>
						<td>
						   <span class="glyphicon glyphicon-export"></span> <a href="<?php echo site_url('pengembalian');?>"> Peminjaman</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<div class="panel panel-info">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
				</span> Laporan</a>
			</h4>
		</div>
		<div id="collapseFour" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-user"></span><a href="#"> Tabelaris</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-book"></span><a href="#"> Buku Besar</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-tasks"></span><a href="#"> Neraca Saldo</a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="glyphicon glyphicon-list-alt"></span><a href="#"> Laporan</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>							
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a href="<?php echo site_url('dashboard/logout');?>"><span class="glyphicon glyphicon-off">
				</span> Logout</a>
			</h4>
		</div>
	</div>
</div>