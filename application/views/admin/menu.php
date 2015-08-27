<div class="panel-group" id="accordion">
	<div class="panel panel-default">
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
							<span class="glyphicon glyphicon-user"></span> <a href="<?php echo site_url('anggota');?>">Siswa</a>
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
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
				</span> Informasi</a>
			</h4>
		</div>
		<div id="collapseTwo" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-usd"></span><a href="<?php echo site_url('peminjaman');?>"> Daftar siswa tahun ini</a></span>
						</td>
					</tr>
					<tr>
						<td>
						   <span class="glyphicon glyphicon-import"></span> <a href="<?php echo site_url('pengembalian');?>"> Daftar Siswa Belum Bayar</a>
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
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th">
				</span> Transaksi</a>
			</h4>
		</div>
		<div id="collapseThree" class="panel-collapse collapse">
			<div class="panel-body">
				<table class="table">
					<tr>
						<td>
							<span class="glyphicon glyphicon-usd"></span><a href="<?php echo site_url('peminjaman');?>"> Pembayaran</a></span>
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
	<div class="panel panel-default">
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
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a href="<?php echo site_url('dashboard/logout');?>"><span class="glyphicon glyphicon-off">
				</span> Logout</a>
			</h4>
		</div>
	</div>
</div>